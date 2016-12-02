<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AssembliesUsers Controller
 *
 * @property \App\Model\Table\AssembliesUsersTable $AssembliesUsers
 */
class AssembliesUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Assemblies', 'Users']
        ];
        $assembliesUsers = $this->paginate($this->AssembliesUsers);

        $this->set(compact('assembliesUsers'));
        $this->set('_serialize', ['assembliesUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Assemblies User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assembliesUser = $this->AssembliesUsers->get($id, [
            'contain' => ['Assemblies', 'Users']
        ]);

        $this->set('assembliesUser', $assembliesUser);
        $this->set('_serialize', ['assembliesUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assembliesUser = $this->AssembliesUsers->newEntity();
        if ($this->request->is('post')) {
            $assembliesUser = $this->AssembliesUsers->patchEntity($assembliesUser, $this->request->data);
            if ($this->AssembliesUsers->save($assembliesUser)) {
                $this->Flash->success(__('The assemblies user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The assemblies user could not be saved. Please, try again.'));
            }
        }
        $assemblies = $this->AssembliesUsers->Assemblies->find('list', ['limit' => 200]);
        $users = $this->AssembliesUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('assembliesUser', 'assemblies', 'users'));
        $this->set('_serialize', ['assembliesUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Assemblies User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assembliesUser = $this->AssembliesUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assembliesUser = $this->AssembliesUsers->patchEntity($assembliesUser, $this->request->data);
            if ($this->AssembliesUsers->save($assembliesUser)) {
                $this->Flash->success(__('The assemblies user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The assemblies user could not be saved. Please, try again.'));
            }
        }
        $assemblies = $this->AssembliesUsers->Assemblies->find('list', ['limit' => 200]);
        $users = $this->AssembliesUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('assembliesUser', 'assemblies', 'users'));
        $this->set('_serialize', ['assembliesUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Assemblies User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assembliesUser = $this->AssembliesUsers->get($id);
        if ($this->AssembliesUsers->delete($assembliesUser)) {
            $this->Flash->success(__('The assemblies user has been deleted.'));
        } else {
            $this->Flash->error(__('The assemblies user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
