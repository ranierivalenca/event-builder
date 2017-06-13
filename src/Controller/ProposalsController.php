<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Proposals Controller
 *
 * @property \App\Model\Table\ProposalsTable $Proposals
 *
 * @method \App\Model\Entity\Proposal[] paginate($object = null, array $settings = [])
 */
class ProposalsController extends AppController
{


    public function initialize(){
        parent::initialize();
        $this->loadModel('Registrations');
    }

    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->deny(['add','edit', 'index','view','delete']);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
         
        $proposals = $this->Proposals->find()->where(['user_id' => $this->Auth->user('id')]);
        

        $this->set(compact('proposals'));
        $this->set('_serialize', ['proposals']);
    }

    /**
     * View method
     *
     * @param string|null $id Proposal id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proposal = $this->Proposals->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('proposal', $proposal);
        $this->set('_serialize', ['proposal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proposal = $this->Proposals->newEntity();
        if ($this->request->is('post')) {
            $proposal = $this->Proposals->patchEntity($proposal, $this->request->getData());
            $proposal->status = 'pendente';
            $proposal->user_id = $this->Auth->user('id');
            if ($this->Proposals->save($proposal)) {
                $this->Flash->success(__('Proposta Salva com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A proposta não pode ser salva.'));
        }
        $this->set(compact('proposal'));
        $this->set('_serialize', ['proposal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proposal id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proposal = $this->Proposals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proposal = $this->Proposals->patchEntity($proposal, $this->request->getData());
            if ($this->Proposals->save($proposal)) {
                $this->Flash->success(__('The proposal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The proposal could not be saved. Please, try again.'));
        }
        $users = $this->Proposals->Users->find('list', ['limit' => 200]);
        $this->set(compact('proposal', 'users'));
        $this->set('_serialize', ['proposal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proposal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proposal = $this->Proposals->get($id);
        if ($this->Proposals->delete($proposal)) {
            $this->Flash->success(__('The proposal has been deleted.'));
        } else {
            $this->Flash->error(__('The proposal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user)
    {

        if (    $this->request->action === 'add'
            ||  $this->request->action === 'index') {
            return true;
        }

        if (    $this->request->action === 'view'
            ||  $this->request->action === 'edit'
            ||  $this->request->action === 'delete') {

            if(isset($this->request->params['pass'][0])){
                $userId = (int)$this->request->params['pass'][0];
                if ($userId === $user['id']) {
                    return true;
                }
            }

        }


        if (    $this->request->action === 'view'
            ||  $this->request->action === 'edit') {
            if (strpos('admin ', $user['role']) !== false){
                return true;
            }
        }
        return parent::isAuthorized($user);
    }
}



