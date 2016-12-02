<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AssembliesCauses Controller
 *
 * @property \App\Model\Table\AssembliesCausesTable $AssembliesCauses
 */
class AssembliesCausesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Assemblies', 'Causes']
        ];
        $assembliesCauses = $this->paginate($this->AssembliesCauses);

        $this->set(compact('assembliesCauses'));
        $this->set('_serialize', ['assembliesCauses']);
    }

    /**
     * View method
     *
     * @param string|null $id Assemblies Cause id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $assembliesCause = $this->AssembliesCauses->get($id, [
            'contain' => ['Assemblies', 'Causes']
        ]);

        $this->set('assembliesCause', $assembliesCause);
        $this->set('_serialize', ['assembliesCause']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $assembliesCause = $this->AssembliesCauses->newEntity();
        if ($this->request->is('post')) {
            $assembliesCause = $this->AssembliesCauses->patchEntity($assembliesCause, $this->request->data);
            if ($this->AssembliesCauses->save($assembliesCause)) {
                $this->Flash->success(__('The assemblies cause has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The assemblies cause could not be saved. Please, try again.'));
            }
        }
        $assemblies = $this->AssembliesCauses->Assemblies->find('list', ['limit' => 200]);
        $causes = $this->AssembliesCauses->Causes->find('list', ['limit' => 200]);
        $this->set(compact('assembliesCause', 'assemblies', 'causes'));
        $this->set('_serialize', ['assembliesCause']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Assemblies Cause id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $assembliesCause = $this->AssembliesCauses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $assembliesCause = $this->AssembliesCauses->patchEntity($assembliesCause, $this->request->data);
            if ($this->AssembliesCauses->save($assembliesCause)) {
                $this->Flash->success(__('The assemblies cause has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The assemblies cause could not be saved. Please, try again.'));
            }
        }
        $assemblies = $this->AssembliesCauses->Assemblies->find('list', ['limit' => 200]);
        $causes = $this->AssembliesCauses->Causes->find('list', ['limit' => 200]);
        $this->set(compact('assembliesCause', 'assemblies', 'causes'));
        $this->set('_serialize', ['assembliesCause']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Assemblies Cause id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $assembliesCause = $this->AssembliesCauses->get($id);
        if ($this->AssembliesCauses->delete($assembliesCause)) {
            $this->Flash->success(__('The assemblies cause has been deleted.'));
        } else {
            $this->Flash->error(__('The assemblies cause could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
