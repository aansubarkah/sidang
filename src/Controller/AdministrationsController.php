<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Administrations Controller
 *
 * @property \App\Model\Table\AdministrationsTable $Administrations
 */
class AdministrationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Decisions']
        ];
        $administrations = $this->paginate($this->Administrations);

        $this->set(compact('administrations'));
        $this->set('_serialize', ['administrations']);
    }

    /**
     * View method
     *
     * @param string|null $id Administration id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $administration = $this->Administrations->get($id, [
            'contain' => ['Decisions']
        ]);

        $this->set('administration', $administration);
        $this->set('_serialize', ['administration']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $administration = $this->Administrations->newEntity();
        if ($this->request->is('post')) {
            $administration = $this->Administrations->patchEntity($administration, $this->request->data);
            if ($this->Administrations->save($administration)) {
                $this->Flash->success(__('The administration has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The administration could not be saved. Please, try again.'));
            }
        }
        $decisions = $this->Administrations->Decisions->find('list', ['limit' => 200]);
        $this->set(compact('administration', 'decisions'));
        $this->set('_serialize', ['administration']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Administration id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $administration = $this->Administrations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $administration = $this->Administrations->patchEntity($administration, $this->request->data);
            if ($this->Administrations->save($administration)) {
                $this->Flash->success(__('The administration has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The administration could not be saved. Please, try again.'));
            }
        }
        $decisions = $this->Administrations->Decisions->find('list', ['limit' => 200]);
        $this->set(compact('administration', 'decisions'));
        $this->set('_serialize', ['administration']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Administration id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $administration = $this->Administrations->get($id);
        if ($this->Administrations->delete($administration)) {
            $this->Flash->success(__('The administration has been deleted.'));
        } else {
            $this->Flash->error(__('The administration could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
