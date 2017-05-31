<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Registrations Controller
 *
 * @property \App\Model\Table\RegistrationsTable $Registrations
 */
class RegistrationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Events']
        ];
        $registrations = $this->paginate($this->Registrations);

        $this->set(compact('registrations'));
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

    public function register($event_id = null)
    {
        $registration = $this->Registrations->newEntity();
        $registration->user_id = $this->Auth->user('id');
        $registration->event_id = $event_id;
        $registration->role = 'participant';
        if ($this->Registrations->save($registration)) {
            $this->Flash->success(__('The registration has been saved.'));
            return $this->redirect(['action' => 'view', $registration->id]);
        }else{
            $this->Flash->error(__('The registration could not be saved. Please, try again.'));
            return;
        }
        $users = $this->Registrations->Users->find('list', ['limit' => 200]);
        $events = $this->Registrations->Events->find('list', ['limit' => 200]);
        $this->set(compact('registration', 'users', 'events'));
        $this->set('_serialize', ['registration']);
    }



    /**
     * Edit method
     *
     * @param string|null $id Registration id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $registration = $this->Registrations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
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


    public function isAuthorized($user)
    {

        if ($this->request->action === 'register' ) {
            return true;
        }

        if ($this->request->action === 'index' ) {
            return true;
        }

        // delete apenas o owner
        if ($this->request->action === 'delete' ) {
            $eventId = (int)$this->request->getParam('pass.0');
            if ( $this->Registrations->isEventOwner($eventId, $user['id']) ){
        
                return true;
            }
        }
       
        return parent::isAuthorized($user);
    }


}
