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

    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add', 'logout', 'activate', 'login']);
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

    






    public function add()
    {
        $user = $this->Users->newEntity();
        $this->set('user', $user);

        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $this->set('user', $user);

            $user->email = strtolower($user->email);
            $user->username = $user->email;
            $user->role = "uszzer";
            $user->nome = mb_strtoupper($user->nome, 'UTF-8');
            $user->activation_code = md5(time());
            $user->ativo = 0;
            $user->created = Time::now()->format('Y-m-d H:i:s');
            $user->modified = Time::now()->format('Y-m-d H:i:s');
            if ($this->Users->save($user)) {
                $this->Flash->default(__($user->nome.', a sua inscrição está pendente de validação. Em instantes será enviado um e-mail para '.$user->email.' com instruções para a validação. '));
                
                $email = new Email('default');
                $email->from(['entec.ifpe.igarassu@gmail.com' => 'EnTec 2017'])
                ->emailFormat('html')
                ->to(strtolower($user->email))
                ->template('default','confirma_insc')
                ->subject('[EnTec 2017] Inscrição pendente de validação')
                ->viewVars(['nome' => $user->nome,'activation_link' => 'http://entec.ifpe.edu.br/users/activate/'.$user->id.'/'.$user->activation_code])
                ->send();
                
                return $this->redirect(['action' => 'add']);
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
}