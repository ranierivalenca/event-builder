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
        $this->paginate = [
            'contain' => ['Users']
        ];
        $papers = $this->paginate($this->Papers);

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
            
            $extension = pathinfo($this->request->data['arquivo']['name'], PATHINFO_EXTENSION);
            $arquivo = $this->Files->uploadAndSaveFile($this->request->data['arquivo']['tmp_name'],'events/papers/','paper_'.$this->Auth->user('email').'_'.strtotime(Time::now()->format('Y-m-d_H_i_s')) .'.'.$extension);
            if($arquivo){
                
                $paper = $this->Papers->patchEntity($paper, $this->request->getData());
                $paper->status = 'pending';
                $paper->user_id = $this->Auth->user('id');

                if ($this->Papers->save($paper)) {
                    $paperFile = $this->PapersFiles->newEntity();
                    $paperFile->paper_id = $paper->id;
                    $paperFile->file_id = $arquivo->id;
                    $paperFile->version = 'review';

                    $this->Flash->success(__('The paper has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
            $this->Flash->error(__('The paper could not be saved. Please, try again.'));


            }else{
                $this->Flash->error(__('Problem ao carregar o arquivo! Entre em contato com a organização.'));
                return;
            }




            
        }
     //   $users = $this->Papers->Users->find('list', ['limit' => 200]);
      //  $files = $this->Papers->Files->find('list', ['limit' => 200]);
       // $this->set(compact('paper', 'users', 'files'));
        //$this->set('_serialize', ['paper']);
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
