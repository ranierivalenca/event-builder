<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\I18n\Time;
use Cake\Mailer\Email;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{


    public function initialize(){
        parent::initialize();
        $this->loadModel('Registrations');
        $this->loadModel('Recoverycodes');
    }

    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add', 'logout', 'activate', 'login', 'validacao','recoverPassword', 'checkCode','editPassword']);
        $this->Auth->deny(['edit', 'index','view','delete','credenciamento']);
    }



    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }


    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        
        //redirect do login sem id como parametro
        if($id === null){
            $user = $this->Users->get($this->Auth->user('id'));
            $this->set('user', $user);
            $this->set('_serialize', ['user']);
        }else{// redirect com id no get

            $user = $this->Users->get($id);
            $this->set('user', $user);
            $this->set('_serialize', ['user']);
        }
    }

    
    public function validacao($id = null)
    {
        
        
        
            $user = $this->Users->get($id);
            $this->set('user', $user);
            $this->set('_serialize', ['user']);
    }




    public function recoverPassword()
    {
                
         if ($this->request->is('post')) {
             $user = $this->Users->find()->where(['email' => $this->request->data['email']])->first();
             if($user){

                $recoverycode = $this->Recoverycodes->newEntity();
                $recoverycode->user_id = $user->id;
                $recoverycode->code = md5(time());;
                if($this->Recoverycodes->save($recoverycode)){
                    $email = new Email('default');
                    $email->from(['entec.ifpe.igarassu@gmail.com' => 'EnTec 2017'])
                            ->emailFormat('html')
                            ->to(strtolower($user->email))
                            ->template('default','codigo_recuperacao')
                            ->subject('[EnTec 2017] Recuperação de senha')
                            ->viewVars(['nome' => $user->nome,'recovery_link' => 'http://entec.ifpe.edu.br/users/edit-password/'.$user->id.'/'.$recoverycode->code])
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
                            $this->Flash->success(__('Em alguns instantes você receberá um e-mail com o link de recuperação de senha.'));
                    return $this->redirect($this->referer());
                }else{
                    $this->Flash->error(__('Aconteceu um erro na geração do código de recuperação, entre em contato com a organização.'));
                }
                
            }else{

                $this->Flash->error(__('E-mail não encontrado no sistema, por favor verifique e tente novamente.'));
            }
        }        
    }


    function editPassword($user_id = null, $code = null) {
        $allowPassChange = false;
        if ($this->request->is('get')) {
            $recoverycode = $this->Recoverycodes->find()->where(['user_id' => $user_id, 'code' => $code])->first();
            if($recoverycode){                
                if(!$recoverycode->used){
                    $dateSub = strtotime(Time::now()->format('Y-m-d H:i:s')) - strtotime($recoverycode->created->format('Y-m-d H:i:s'));
                
                    if($dateSub/3600 < 48){
                        $user = $this->Users->get($recoverycode->user_id);
                        $allowPassChange = true;
                        $this->set('user', $user);
                        $this->set('_serialize', ['user']);
                    }else{
                        $this->Flash->error(__('O link de recuperação de senha expirou, ele é valido por apenas 48 horas, você deve gerar um novo link de recuperação.'));
                        return $this->redirect(['action' => 'recoverPassword']);
                    }
                }else{
                    $this->Flash->error(__('Este link de recuperação de senha já foi utilizado uma vez, ele não pode ser utilizado mais de uma vez, você deve solicitar outro link.'));
                    return $this->redirect(['action' => 'recoverPassword']);
                }
            }else{
                $this->Flash->error(__('O código de recuperação não foi encontrado, por favor verifique se o link de recuperação na barra de endereço é o mesmo que está no seu e-mail!'));
            }
        }else if ($this->request->is([ 'post', 'put'])) {
            $user = $this->Users->get($user_id);
            $user = $this->Users->patchEntity ( $user, $this->request->data );

            if($user['new_password'] === $user['confirm_new_password']){
                $user->password = $user['new_password'];
                if($this->Users->save($user)){
                    $this->Flash->success(__('Senha alterada com sucesso! Acesse a sua conta com a nova senha!'));
                    //marca como usado todos os links da recuperação do usuário
                    $this->Recoverycodes->updateAll(
                            array('used' => '1'),
                            array('user_id' => $user->id)
                        );
                    return $this->redirect(['action' => 'login']);
                }else{

                    $this->Flash->success(__('Falha ao salvar a senha, entre em contato com a organização.'));
                }
            }else{
                $allowPassChange = true;
                $this->set('user', $user);
                $this->set('_serialize', ['user']); 
                $this->Flash->success(__('As senhas digitadas são diferentes, tente novamente!'));
            }
        }        

        $this->set('allowPassChange', $allowPassChange);

    }



    public function add()
    {
        $user = $this->Users->newEntity();
        $this->set('user', $user);

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $this->set('user', $user);

            $user->email = strtolower($user->email);
            $user->username = $user->email;
            $user->role = "user";
            $user->nome = mb_strtoupper($user->nome, 'UTF-8');
            $user->activation_code = md5(time());
            $user->ativo = 0;
            $user->created = Time::now()->format('Y-m-d H:i:s');
            $user->modified = Time::now()->format('Y-m-d H:i:s');
            if ($this->Users->save($user)) {

                $registration = $this->Registrations->newEntity();
                $registration->user_id = $user->id;
                $registration->event_id = 2;
                $registration->role = 'participant';
                $this->Registrations->save($registration);

                $this->Flash->default(__($user->nome.', a sua inscrição está pendente de validação. Em instantes você receberá um e-mail para '.$user->email.' com instruções para a validação. '));
                
                $email = new Email('default');
                $email->from(['entec.ifpe.igarassu@gmail.com' => 'EnTec 2017'])
                ->emailFormat('html')
                ->to(strtolower($user->email))
                ->template('default','confirma_insc')
                ->subject('[EnTec 2017] Inscrição pendente de validação')
                ->viewVars(['nome' => $user->nome,'activation_link' => 'http://entec.ifpe.edu.br/users/activate/'.$user->id.'/'.$user->activation_code])
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
                

                return $this->redirect(['action' => 'validacao',$user->id]);
            }
            $this->Flash->error(__('Incrição não realizada, verifique os campos destacados em vermelho.'));
        }
    }



    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $user = $this->Users->get ( $id );
        if ($this->request->is ( [ 'post', 'put'] )) {
            
            $this->Users->patchEntity ( $user, $this->request->data );
            $this->Users->validator()->remove('password');
            $this->Users->validator()->remove('confirm_password');
            $user->modified = Time::now()->format('Y-m-d H:i:s');
            $user->nome = mb_strtoupper($user->nome, 'UTF-8');
            $user->email = strtolower($user->email);
            $user->username = $user->email;
            if ($this->Users->save ( $user )) {
                $this->Flash->success ( __ ( 'Inscrição atualizada com sucesso.' ) );
                return $this->redirect ( [
                        'action' => 'view', $user->id
                ] );
            }
            $this->Flash->error ( __ ( 'Não foi possivel atualizar a inscrição.' ) );
        }

        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $event = $this->Registrations->find()->where(['user_id' => $user['id'], 'event_id' => '2'])->first();
                if($event) $user['isInscrito'] = true;
                else $user['isInscrito'] = false;
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('E-mail ou senha invalidos, tente novamente.'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }

    function activate($user_id = null, $in_hash = null) {
        $user = $this->Users->get($user_id);


        if ($user->ativo == 1){
            $this->Flash->default(__('A sua inscrição já foi confirmada anteriormente.'));
        }else if ($this->Users->exists($user_id) && ($in_hash == $user->activation_code)){
            // Update the active flag in the database
            $this->Users->updateAll(['ativo' => 1], ['id' => $user_id]);

            $email = new Email('default');
            $email->from(['entec.ifpe.igarassu@gmail.com' => 'EnTec 2017'])
            ->emailFormat('html')
            ->to(strtolower($user->email))
            ->template('default','insc_sucesso')
            ->subject('[EnTec 2017] Inscrição confirmada')
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
            $this->Flash->success(__('A sua inscrição foi confirmada com sucesso, para alterar os seus dados realize login!'));

        }else {
            $this->Flash->error(__('Ocorreu algum erro no ativação, por favor, comunique a organização.'));
        }
        return $this->redirect('/users/login');
    }




    public function isAuthorized($user)
    {
        

        // O próprio usuário pode ver os seus dados
        if ($this->request->action === 'edit' ) {
            $userId = (int)$this->request->params['pass'][0];
            if ($userId === $user['id']) {
                return true;
            }
            if($user['role'] === 'admin'){
                return true;
            }

        }

        if ($this->request->action === 'view' ) {
            if(isset($this->request->params['pass'][0])){
                $userId = (int)$this->request->params['pass'][0];
                if ($userId === $user['id']) {
                    return true;
                }
                if (strpos('admin ', $user['role']) !== false){
                    return true;
                }
            }else{
                return true;
            }
        }


        if (    $this->request->action === 'credenciamento'
            ||  $this->request->action === 'credenciarajax'
            ||  $this->request->action === 'imprimircertajax'
            ||  $this->request->action === 'index'
            ||  $this->request->action === 'view') {
            if (strpos('admin ', $user['role']) !== false){
                return true;
            }
        }
        return parent::isAuthorized($user);
    }


    /**
    public function migrar(){
        $users = $this->Users->find()->where(['ativo' => 1]);

        $this->Flash->default(__('entrou'));
        foreach($users as $user)
        {
            $registration = $this->Registrations->newEntity();
            $registration->user_id = $user->id;
            $registration->event_id = 1;
            $registration->checkin = $user->credenciado;
            $registration->certificate = $user->rec_certificado;
            $registration->created = $user->created;
            $registration->modified = $user->modified;
            $registration->role = 'participant';
            $this->Registrations->save($registration);
            
        }

        return $this->redirect($this->referer());
    }
    */


}
