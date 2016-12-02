<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CausesClients Controller
 *
 * @property \App\Model\Table\CausesClientsTable $CausesClients
 */
class CausesClientsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Causes', 'Clients']
        ];
        $causesClients = $this->paginate($this->CausesClients);

        $this->set(compact('causesClients'));
        $this->set('_serialize', ['causesClients']);
    }

    /**
     * View method
     *
     * @param string|null $id Causes Client id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $causesClient = $this->CausesClients->get($id, [
            'contain' => ['Causes', 'Clients']
        ]);

        $this->set('causesClient', $causesClient);
        $this->set('_serialize', ['causesClient']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $causesClient = $this->CausesClients->newEntity();
        if ($this->request->is('post')) {
            $causesClient = $this->CausesClients->patchEntity($causesClient, $this->request->data);
            if ($this->CausesClients->save($causesClient)) {
                $this->Flash->success(__('The causes client has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The causes client could not be saved. Please, try again.'));
            }
        }
        $causes = $this->CausesClients->Causes->find('list', ['limit' => 200]);
        $clients = $this->CausesClients->Clients->find('list', ['limit' => 200]);
        $this->set(compact('causesClient', 'causes', 'clients'));
        $this->set('_serialize', ['causesClient']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Causes Client id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $causesClient = $this->CausesClients->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $causesClient = $this->CausesClients->patchEntity($causesClient, $this->request->data);
            if ($this->CausesClients->save($causesClient)) {
                $this->Flash->success(__('The causes client has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The causes client could not be saved. Please, try again.'));
            }
        }
        $causes = $this->CausesClients->Causes->find('list', ['limit' => 200]);
        $clients = $this->CausesClients->Clients->find('list', ['limit' => 200]);
        $this->set(compact('causesClient', 'causes', 'clients'));
        $this->set('_serialize', ['causesClient']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Causes Client id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $causesClient = $this->CausesClients->get($id);
        if ($this->CausesClients->delete($causesClient)) {
            $this->Flash->success(__('The causes client has been deleted.'));
        } else {
            $this->Flash->error(__('The causes client could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
