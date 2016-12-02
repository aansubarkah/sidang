<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Causes Controller
 *
 * @property \App\Model\Table\CausesTable $Causes
 */
class CausesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $causes = $this->paginate($this->Causes);

        $this->set(compact('causes'));
        $this->set('_serialize', ['causes']);
    }

    /**
     * View method
     *
     * @param string|null $id Cause id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cause = $this->Causes->get($id, [
            'contain' => ['Categories', 'Assemblies', 'Clients', 'Meetings']
        ]);

        $this->set('cause', $cause);
        $this->set('_serialize', ['cause']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cause = $this->Causes->newEntity();
        if ($this->request->is('post')) {
            $cause = $this->Causes->patchEntity($cause, $this->request->data);
            if ($this->Causes->save($cause)) {
                $this->Flash->success(__('The cause has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cause could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Causes->Categories->find('list', ['limit' => 200]);
        $assemblies = $this->Causes->Assemblies->find('list', ['limit' => 200]);
        $clients = $this->Causes->Clients->find('list', ['limit' => 200]);
        $this->set(compact('cause', 'categories', 'assemblies', 'clients'));
        $this->set('_serialize', ['cause']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cause id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cause = $this->Causes->get($id, [
            'contain' => ['Assemblies', 'Clients']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cause = $this->Causes->patchEntity($cause, $this->request->data);
            if ($this->Causes->save($cause)) {
                $this->Flash->success(__('The cause has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cause could not be saved. Please, try again.'));
            }
        }
        $categories = $this->Causes->Categories->find('list', ['limit' => 200]);
        $assemblies = $this->Causes->Assemblies->find('list', ['limit' => 200]);
        $clients = $this->Causes->Clients->find('list', ['limit' => 200]);
        $this->set(compact('cause', 'categories', 'assemblies', 'clients'));
        $this->set('_serialize', ['cause']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cause id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cause = $this->Causes->get($id);
        if ($this->Causes->delete($cause)) {
            $this->Flash->success(__('The cause has been deleted.'));
        } else {
            $this->Flash->error(__('The cause could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
