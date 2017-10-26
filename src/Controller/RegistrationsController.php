<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;
use CakePdf\Pdf\CakePdf;


 /* Registrations Controller
 *
 * @property \App\Model\Table\RegistrationsTable $Registrations
 */
class RegistrationsController extends AppController
{

    public function initialize(){
        parent::initialize();
        $this->loadModel('Users');
    }

     public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        $this->Auth->allow();
        $this->Auth->deny(['register', 'welcome','index','editRole']);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function indexPaginate()
    {
        $this->paginate = [
            'contain' => ['Users', 'Events']
        ];
        $registrations = $this->paginate($this->Registrations);

        $this->set(compact('registrations'));
        $this->set('_serialize', ['registrations']);
    }

    public function index($event_id = 2)
    {
        
        $count = $this->Registrations->find()->where(['event_id' => $event_id])->count();
        $registrations = $this->Registrations->find()->where(['event_id' => $event_id])->contain(['Users']);

        $this->set(compact('registrations'));
        $this->set('count', $count);
        $this->set('_serialize', ['registrations']);
    }


    /**
     * View method
     *
     * @param string|null $id Registration id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $registration = $this->Registrations->get($id, [
            'contain' => ['Users', 'Events']
        ]);

        $this->set('registration', $registration);
        $this->set('_serialize', ['registration']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $registration = $this->Registrations->newEntity();
        if ($this->request->is('post')) {
            $registration = $this->Registrations->patchEntity($registration, $this->request->data);
            if ($this->Registrations->save($registration)) {
                $this->Flash->success(__('The registration has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The registration could not be saved. Please, try again.'));
        }
        $users = $this->Registrations->Users->find('list', ['limit' => 200]);
        $events = $this->Registrations->Events->find('list', ['limit' => 200]);
        $this->set(compact('registration', 'users', 'events'));
        $this->set('_serialize', ['registration']);
    }

    public function register($event_id = 2, $user_id = null)
    {
        if($user_id === null) $user_id = $this->Auth->user('id');
        
        if($this->Registrations->find()->where(['user_id' => $user_id, 'event_id' => $event_id])->count() > 0){
            $this->Flash->success(__('Você já está inscrito no ENTEC 2017!'));
            $this->Flash->success(__('Por favor, verifique se os seus dados estão atualizados e clique em ENVIAR!'));
            return $this->redirect(['controller' => 'users','action' => 'edit', $user_id]);
        }

        $registration = $this->Registrations->newEntity();
        $registration->user_id = $user_id;
        $registration->event_id = $event_id;
        $registration->role = 'participant';
        
        if ($this->Registrations->save($registration)) {
             $user = $this->Registrations->Users->get($user_id);
             $email = new Email('default');
             $email->from(['entec.ifpe.igarassu@gmail.com' => 'EnTec 2017'])
            ->emailFormat('html')
            ->to(strtolower($user->email))
            ->template('default','insc_sucesso')
            ->subject('[EnTec 2017] Bem Vindo, Inscrição Realizada!')
            ->viewVars(['nome' => $user->nome,'ninscricao' => $user->id])
            ->attachments(array(
                    'header_email.png' => array(
                        'file' => WWW_ROOT.'img/email-header-1000.png',
                        'mimetype' => 'image/png',
                        'contentId' => 'header'),
                    'footer_email.png' => array(
                        'file' => WWW_ROOT.'img/email-footer-1000.png',
                        'mimetype' => 'image/png',
                        'contentId' => 'footer'),))
            ->send();

            $this->Flash->success(__('Parabéns você esta inscrito no ENTEC 2017 e em instantes receberá um e-mail de confirmação!'));
            $this->Flash->success(__('Por favor, verifique se os seus dados estão atualizados e clique ENVIAR!'));
            return $this->redirect(['controller' => 'users','action' => 'edit', $user_id]);
        }else{
            $this->Flash->error(__('A sua inscrição não pode ser realizada, por favor entre em contato com a organização!'));
        }
        

    }

    public function checkin($event_id = 2)
    {

        //$connection = ConnectionManager::get('default');
        //$registrations = $connection->execute('SELECT registrations.user_id, registrations.checkin, users.nome, users.ativo FROM registrations INNER JOIN users on registrations.user_id = users.id WHERE registrations.event_id=2 ')->fetchAll('assoc');

        $count = $this->Registrations->find()->where(['event_id' => $event_id])->count();
        
        $count_in = $this->Registrations->find()->where(['event_id' => $event_id,'checkin' => '1'])->count();

        $registrations = $this->Registrations->find()->select(['Users.id','Users.nome','Users.ativo','checkin'])->where(['event_id' => $event_id])->contain(['Users'])->order(['Users.nome' => 'ASC']);;
                                       ;

        //$this->paginate = array('limit' => 1500, 'order' => array() ); 

        //$registrations = $this->paginate($registrations);
        $this->set(compact('registrations'));
        $this->set('_serialize', ['registrations']);
        
        $this->set('count', $count);
        $this->set('count_in', $count_in);
    }


    /**
     * Edit method
     *
     * @param string|null $id Registration id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function editRole($event_id = null, $user_id = null)
    {
        $registration = $this->Registrations->find()->where(['event_id' => $event_id, 'user_id' => $user_id])->contain(['Users'])->first();

        if ($this->request->is(['patch', 'post', 'put'])) {
            $registration = $this->Registrations->patchEntity($registration, $this->request->data);
            if ($this->Registrations->save($registration)) {
                $this->Flash->success(__('Papel Atualizado!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Aconteceu algum erro a inscrição não foi alterada!'));
        }
        
        $this->set(compact('registration'));
        $this->set('_serialize', ['registration']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Registration id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $registration = $this->Registrations->get($id);
        if ($this->Registrations->delete($registration)) {
            $this->Flash->success(__('The registration has been deleted.'));
        } else {
            $this->Flash->error(__('The registration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function checkinajax( $user_id)
    {
        $event_id=2;
        $this->Flash->error(__('Entrou checkin'));
        $this->Flash->error(__('Entrou checkin'));
        $registration = $this->Registrations->find()->where(['event_id' => $event_id, 'user_id' => $user_id])->first();
        if($registration->checkin){
            $this->Registrations->updateAll(['checkin' => 0], ['user_id' => $user_id, 'event_id' => $event_id]);
        }else{
            $this->Registrations->updateAll(['checkin' => 1], ['user_id' => $user_id, 'event_id' => $event_id]);
        }

        return $this->redirect($this->referer());
        
    }

    


    public function isAuthorized($user)
    {

        if ($this->request->action === 'register' ) {
            return true;
        }


        if ($this->request->action === 'index' ) {
            $eventId = (int)$this->request->getParam('pass.0');            
            $userEventRole = $this->Registrations->getUserEventRole($eventId, $user['id']);
            
            if ( strpos('owner manager', $userEventRole) !== false){
                return true;
            }
        }

        if ($this->request->action === 'editRole' ) {
            $eventId = (int)$this->request->getParam('pass.0');            
            $userEventRole = $this->Registrations->getUserEventRole($eventId, $user['id']);
            
            if ( strpos('owner manager', $userEventRole) !== false){
                return true;
            }
        }
       
        return parent::isAuthorized($user);
    }


        public function certificadoOuvinte($event_id = 2){
            $registrations = $this->Registrations->find()->where(['event_id' => $event_id, 'certificate' => 0, 'checkin' => 1])->contain(['Users'])->limit(100);
            
           

            foreach ($registrations as $registration){
                $this->set(compact('registration'));

                $CakePdf = new \CakePdf\Pdf\CakePdf();
                $CakePdf->orientation('landscape');
                $CakePdf->template('certificado', 'certificado_ouvinte');
                $CakePdf->viewVars($this->viewVars);
                $pdf = $CakePdf->output();

                //          enviar e-mail
                $email = new Email('default');
                $email->from(['contatoentec@igarassu.ifpe.edu.br' => 'EnTec 2017'])
                ->emailFormat('html')
                ->to(strtolower($registration->user['email']))
//                ->to(strtolower('strapacao@gmail.com'))
                ->template('default','certificado_ouvinte')
                ->subject('[EnTec 2017] Certificado de Ouvinte')
                ->viewVars(['nome' => $registration->user['nome']])
                ->attachments(array('ENTEC17_certificado_ouvinte.pdf' => array('data' => $pdf, 'mimetype' => 'application/pdf')))
                ->send();
                
                $this->Registrations->updateAll(['certificate' => 1], ['user_id' => $registration['user_id'], 'event_id' => $registration['event_id']]);
         
                //$pdf = $CakePdf->write(APP . 'files' . DS . 'minicurso'.$registration['id'].'_'.rand(1,5000).'.pdf');
            }

            $this->Flash->default(__('Foram enviados '.count($registrations).' certificados'));

            return $this->redirect($this->referer());
        }


        public function certificadoVoluntario($event_id = 2){
            $ids = [755];
            $registrations = $this->Registrations->find()->where(['event_id' => $event_id, 'user_id IN' => $ids])->contain(['Users'])->limit(15);
            
            
           

            foreach ($registrations as $registration){
                $this->set(compact('registration'));

                $CakePdf = new \CakePdf\Pdf\CakePdf();
                $CakePdf->orientation('landscape');
                $CakePdf->template('certificado', 'certificado_voluntario');
                $CakePdf->viewVars($this->viewVars);
                $pdf = $CakePdf->output();

                //          enviar e-mail
                $email = new Email('default');
                $email->from(['contatoentec@igarassu.ifpe.edu.br' => 'EnTec 2017'])
                ->emailFormat('html')
                ->to(strtolower($registration->user['email']))
            //  ->to(strtolower('strapacao@gmail.com'))
                ->template('default','certificado_ouvinte')
                ->subject('[EnTec 2017] Certificado de Voluntário')
                ->viewVars(['nome' => $registration->user['nome']])
                ->attachments(array('ENTEC17_certificado_ouvinte.pdf' => array('data' => $pdf, 'mimetype' => 'application/pdf')))
                ->send();
                
                
         
                //$pdf = $CakePdf->write(APP . 'files' . DS . 'minicurso'.$registration['id'].'_'.rand(1,5000).'.pdf');
            }

            $this->Flash->default(__('Foram enviados '.count($registrations).' certificados'));

            return $this->redirect($this->referer());
        }

        public function certificadoArtigos($event_id = 2){
            $registrations = [
['PROJETO MECÂNICO E INSTRUMENTAÇÃO DE PROTÓTIPO ROBÓTICO PARALELO TIPO DELTA PARA APLICAÇÃO DIDÁTICA','ALVES, F. O. M.; SANTOS, L. T. ; ALMEIDA JÚNIOR, J. G.; BARROS, J. C. C.','vini1708@hotmail.com', 'alexander.sena@caruaru.ifpe.edu.br', 'ich_cleyson@hotmail.com']
];

            foreach ($registrations as $registration){
                $this->set(compact('registration'));

                $CakePdf = new \CakePdf\Pdf\CakePdf();
                $CakePdf->orientation('landscape');
                $CakePdf->template('certificado', 'certificado_apresentacao_artigo');
                $CakePdf->viewVars($this->viewVars);
                $pdf = $CakePdf->output();

                //          enviar e-mail
                $email = new Email('default');
                $email->from(['contatoentec@igarassu.ifpe.edu.br' => 'EnTec 2017'])
                ->emailFormat('html')
                // ->to(strtolower($registration->user['email']))
                // ->to('strapacao@gmail.com','alexandre.vianna@igarassu.ifpe.edu.br','cinfo@igarassu.ifpe.edu.br')
                ->to(array_slice($registration, 2))
                ->template('default','certificado_apresentacao_artigo')
                ->subject('[EnTec 2017] Certificado de Apresentação de Artigo')
                ->attachments(array('ENTEC17_certificado_artigo.pdf' => array('data' => $pdf, 'mimetype' => 'application/pdf')))
                ->send();
                
                
         
                //$pdf = $CakePdf->write(APP . 'files' . DS . 'minicurso'.$registration['id'].'_'.rand(1,5000).'.pdf');
            }

            $this->Flash->default(__('Foram enviados '.count($registrations).' certificados'));

            return $this->redirect($this->referer());
        }
     




}
