<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;
use Cake\I18n\Time;

/**
 * Papers Controller
 *
 * @property \App\Model\Table\PapersTable $Papers
 *
 * @method \App\Model\Entity\Paper[] paginate($object = null, array $settings = [])
 */
class PapersController extends AppController
{


    public function initialize(){
        parent::initialize();
        $this->loadModel('Files');
        $this->loadModel('PapersFiles');
        $this->loadModel('Registrations');
    }

    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
//        $this->Auth->allow([]);
        $this->Auth->deny(['add','edit', 'index','view','delete']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $register = $this->Registrations->find()->select('role')->where(['user_id' => $this->Auth->user('id'),'event_id' => 2]);
        if (strpos('admin', $this->Auth->user('role') !== false || strpos('manager', $register['role']) !== false)){
                $papers = $this->Papers;
        }else{
            $papers = $this->Papers->find()->where(['user_id' => $this->Auth->user('id')])->contain('Users') ;

        }


        $this->set(compact('papers'));
        $this->set('_serialize', ['papers']);
    }


    public function indexAdmin()
    {
        $register = $this->Registrations->find()->select('role')->where(['user_id' => $this->Auth->user('id'),'event_id' => 2]);
        if (strpos('admin', $this->Auth->user('role') !== false || strpos('manager', $register['role']) !== false)){
                $this->paginate = [
            'contain' => ['Users','PapersFiles.Files']
        ];
                $papers = $this->paginate($this->Papers);
        }else{
            $papers = $this->paginate($this->Papers->find()->where(['user_id' => $this->Auth->user('id')])->contain('Users') );

        }

        

        $this->set(compact('papers'));
        $this->set('_serialize', ['papers']);
    }
    /**
     * View method
     *
     * @param string|null $id Paper id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paper = $this->Papers->get($id, [
            'contain' => ['Users', 'Files']
        ]);

        $this->set('paper', $paper);
        $this->set('_serialize', ['paper']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paper = $this->Papers->newEntity();
        if ($this->request->is('post')) {
            //$this->Flash->error(__('Tamanho do arquivo : '.$this->request->data['arquivo']['tmp_name'])/pow(1024, 2)) ;
            if(filesize($this->request->data['arquivo']['tmp_name'])/pow(1024, 2) < 1.2){
                $extension = pathinfo($this->request->data['arquivo']['name'], PATHINFO_EXTENSION);
                $arquivo = $this->Files->uploadAndSaveFile($this->request->data['arquivo']['tmp_name'],'events/papers/','paper_'.$this->Auth->user('email').'_'.Time::now()->format('Y-m-d_H_i_s').'.'.$extension);
                if($arquivo){
                    
                    $paper = $this->Papers->patchEntity($paper, $this->request->getData());
                    $paper->status = 'pending';
                    $paper->user_id = $this->Auth->user('id');

                    if ($this->Papers->save($paper)) {
                        $paperFile = $this->PapersFiles->newEntity();
                        $paperFile->paper_id = $paper->id;
                        $paperFile->file_id = $arquivo->id;
                        $paperFile->version = 'review';
                        if ($this->PapersFiles->save($paperFile)) {
                            $email = new Email('default');
                            $email->from(['entec.ifpe.igarassu@gmail.com' => 'EnTec 2017'])
                                ->emailFormat('html')
                                ->to(strtolower($this->Auth->user('email')))
                                ->template('default','artigo_recebido')
                                ->subject('[EnTec 2017] [Mostra Acadêmica] Artigo recebido (ID:'.$paper->id.')')
                                ->viewVars(['nome' => $this->Auth->user('nome'),'paper' => $paper])
                                ->attachments(array(
                                    WWW_ROOT.$arquivo->path.$arquivo->name,
                                    'header_email.png' => array(
                                        'file' => WWW_ROOT.'img/email-header-1000.png',
                                        'mimetype' => 'image/png',
                                        'contentId' => 'header'),
                                    'footer_email.png' => array(
                                        'file' => WWW_ROOT.'img/email-footer-1000.png',
                                        'mimetype' => 'image/png',
                                        'contentId' => 'footer')))
                                ->send();
                            $this->Flash->success(__('O seu artigo foi enviado para revisão, em instantes você receberá um e-mail de confirmação.'.Time::now()->format('Y-m-d_H_i_s') ));
                            return $this->redirect(['action' => 'index']);
                        }else{
                            $this->Flash->error(__('Problema ao enviar o artigo, entre em contato com a organização.'));    
                        }
                        
                    }else{
                        $this->Flash->error(__('The paper could not be saved. Please, try again.'));
                    }


                }else{
                    $this->Flash->error(__('Problem ao carregar o arquivo! Entre em contato com a organização.'));
                    return;
                }
            }else{
                $this->Flash->error(__('Tamanho do arquivo maior é que 4 Megabytes, por favor, reduza o tamaho do arquivo. As ferramentas de escritório como Word e Writer disponibilizam opções de compactação.'));
            }




            
        }
     //   $users = $this->Papers->Users->find('list', ['limit' => 200]);
      //  $files = $this->Papers->Files->find('list', ['limit' => 200]);
       // $this->set(compact('paper', 'users', 'files'));
        $this->set(compact('paper'));
        $this->set('_serialize', ['paper']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Paper id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paper = $this->Papers->get($id, [
            'contain' => ['Files']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paper = $this->Papers->patchEntity($paper, $this->request->getData());
            if ($this->Papers->save($paper)) {
                $this->Flash->success(__('The paper has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paper could not be saved. Please, try again.'));
        }
        $users = $this->Papers->Users->find('list', ['limit' => 200]);
        $files = $this->Papers->Files->find('list', ['limit' => 200]);
        $this->set(compact('paper', 'users', 'files'));
        $this->set('_serialize', ['paper']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Paper id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paper = $this->Papers->get($id);
        if ($this->Papers->delete($paper)) {
            $this->Flash->success(__('The paper has been deleted.'));
        } else {
            $this->Flash->error(__('The paper could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function isAuthorized($user)
    {

        if (    $this->request->action === 'add'
            ||  $this->request->action === 'view'
            ||  $this->request->action === 'index'
            ||  $this->request->action === 'edit') {
            return true;
        }
        if (    $this->request->action === 'add'
            ||  $this->request->action === 'view'
            ||  $this->request->action === 'edit'
            ||  $this->request->action === 'index') {
            if (strpos('admin ', $user['role']) !== false){
                return true;
            }
        }
        return parent::isAuthorized($user);
    }

}
