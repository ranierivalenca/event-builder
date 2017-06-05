<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Error\Debugger;

/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 */
class EventsController extends AppController
{

    
    public function initialize(){
        parent::initialize();
        $this->loadModel('Files');
        $this->loadModel('Registrations');
    }


    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['view','index']);
        $this->Auth->deny(['add','edit','delete']);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {

        
        $events = $this->paginate($this->Events->find()->contain(['Files']));
        $this->set(compact('events'));
        $this->set('_serialize', ['events']);
    }

    /**
     * View method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => ['Registration']
        ]);

        $this->set('event', $event);
        $this->set('_serialize', ['event']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $event = $this->Events->newEntity();
        if ($this->request->is('post')) {
            $event = $this->Events->patchEntity($event, $this->request->data);
            $extension = pathinfo($this->request->data['cover']['name'], PATHINFO_EXTENSION);
            $cover = $this->Files->uploadAndSaveFile($this->request->data['cover']['tmp_name'],'events/img/','cover_'.$event->initials.'_'.$event->edition.'.'.$extension);
            if($cover){
                $event->cover = $cover->id;
            }else{
                $this->Flash->error(__('Problem ao carregar o arquivo de capa'));
                return;
            }
            

            if ($this->Events->save($event)) {
                $ownerRegistration = $this->Registrations->newEntity();
                $ownerRegistration->user_id = $this->Auth->user('id');
                $ownerRegistration->event_id = $event->id;
                $ownerRegistration->role = 'owner';
                $this->Registrations->save($ownerRegistration);
                $this->Flash->success(__('The event has been saved.'));
                return $this->redirect(['action' => 'index']);
            }


            $this->Flash->error(__('The event could not be saved. Please, try again.'));

            
        }
        $this->set(compact('event'));
        $this->set('_serialize', ['event']);
    }


    

    /**
     * Edit method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $event = $this->Events->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $event = $this->Events->patchEntity($event, $this->request->data);
            if ($this->Events->save($event)) {
                $this->Flash->success(__('The event has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event could not be saved. Please, try again.'));
        }
        $this->set(compact('event'));
        $this->set('_serialize', ['event']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Event id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $event = $this->Events->get($id);
        if ($this->Events->delete($event)) {
            $this->Flash->success(__('The event has been deleted.'));
        } else {
            $this->Flash->error(__('The event could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }


    public function isAuthorized($user)
    {
        // qualquer um com o papel organizer pode criar eventos
        if ($this->request->action === 'add' ) {
            if (strpos('organizer', $user['role']) !== false){
                return true;
            }
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
