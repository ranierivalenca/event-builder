<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;

/**
 * Minicursos Controller
 *
 * @property \App\Model\Table\MinicursosTable $Minicursos
 */
class MinicursosController extends AppController
{

    public function initialize(){
        parent::initialize();
        $this->loadModel('Registrations');
    }


    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('minicursos', $this->paginate($this->Minicursos));
        $this->set('_serialize', ['minicursos']);
    }

    /**
     * View method
     *
     * @param string|null $id Minicurso id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $minicurso = $this->Minicursos->get($id, [
            'contain' => ['Userminicursos' => ['Users'=>['fields' => array ( 'Users.nome' )]]]
        ]);
        $this->set('minicurso', $minicurso);
        $this->set('_serialize', ['minicurso']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $minicurso = $this->Minicursos->newEntity();
        if ($this->request->is('post')) {
            $minicurso = $this->Minicursos->patchEntity($minicurso, $this->request->data);
            if ($this->Minicursos->save($minicurso)) {
                $this->Flash->success(__('A atividade foi criada!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('A atividade não pode ser criada!'));
            }
        }
        $this->set(compact('minicurso'));
        $this->set('_serialize', ['minicurso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Minicurso id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $minicurso = $this->Minicursos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $minicurso = $this->Minicursos->patchEntity($minicurso, $this->request->data);
            if ($this->Minicursos->save($minicurso)) {
                $this->Flash->success(__('A atividade foi salva!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('A atividade não foi salva!'));
            }
        }
        $this->set(compact('minicurso'));
        $this->set('_serialize', ['minicurso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Minicurso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $minicurso = $this->Minicursos->get($id);
        if ($this->Minicursos->delete($minicurso)) {
            $this->Flash->success(__('A atividade foi removida.'));
        } else {
            $this->Flash->error(__('A atividade não pode ser removida.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    

    
    
    public function matricularajax($userid,$minicursoid){
    	
        $connection = ConnectionManager::get('default');
        
        if($this->Minicursos->Userminicursos->Users->exists($userid)){
        	$userminicurso = $this->Minicursos->Userminicursos->newEntity();
        	$userminicurso->user_id = $userid;
        	$userminicurso->minicurso_id = $minicursoid;
        	if ($this->Minicursos->Userminicursos->save($userminicurso)) {
        		$this->Flash->success(__('A matricula foi realizada com sucesso!'));
        	} else {
        		$this->Flash->error(__('Ocorreu algum erro, tente novamente!'));
        	}
        	
        	
        }

    	
    }


        public function isAuthorized($user)
    {
            
    
        if (    $this->request->action === 'view'
                ||  $this->request->action === 'index'
                ||  $this->request->action === 'matricularajax'
                ) {
                    if (strpos('admin', $user['role']) !== false){
                        return true;
                    }
                    $role = $this->Registrations->getUserEventRole(2,$this->Auth->user('id'));
                    if (strpos('manager owner supervisor', $role) !== false){
                        return true;
                    }
                }
                return parent::isAuthorized($user);
    }
}
