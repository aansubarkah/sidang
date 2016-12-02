<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Assemblies Controller
 *
 * @property \App\Model\Table\AssembliesTable $Assemblies
 */
class AssembliesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $assemblies = $this->paginate($this->Assemblies);

        $this->set(compact('assemblies'));
        $this->set('_serialize', ['assemblies']);
    }

    /**
     * View method
     *
     * @param string|null $id Assembly id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assembly = $this->Assemblies->get($id, [
            'contain' => ['Causes', 'Users', 'Meetings']
        ]);

        $this->set('assembly', $assembly);
        $this->set('_serialize', ['assembly']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assembly = $this->Assemblies->newEntity();
        if ($this->request->is('post')) {
            $assembly = $this->Assemblies->patchEntity($assembly, $this->request->data);
            if ($this->Assemblies->save($assembly)) {
                $this->Flash->success(__('The assembly has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The assembly could not be saved. Please, try again.'));
            }
        }
        $causes = $this->Assemblies->Causes->find('list', ['limit' => 200]);
        $users = $this->Assemblies->Users->find('list', ['limit' => 200]);
        $this->set(compact('assembly', 'causes', 'users'));
        $this->set('_serialize', ['assembly']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Assembly id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assembly = $this->Assemblies->get($id, [
            'contain' => ['Causes', 'Users']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assembly = $this->Assemblies->patchEntity($assembly, $this->request->data);
            if ($this->Assemblies->save($assembly)) {
                $this->Flash->success(__('The assembly has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The assembly could not be saved. Please, try again.'));
            }
        }
        $causes = $this->Assemblies->Causes->find('list', ['limit' => 200]);
        $users = $this->Assemblies->Users->find('list', ['limit' => 200]);
        $this->set(compact('assembly', 'causes', 'users'));
        $this->set('_serialize', ['assembly']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Assembly id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assembly = $this->Assemblies->get($id);
        if ($this->Assemblies->delete($assembly)) {
            $this->Flash->success(__('The assembly has been deleted.'));
        } else {
            $this->Flash->error(__('The assembly could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
