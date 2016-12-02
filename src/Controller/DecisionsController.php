<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Decisions Controller
 *
 * @property \App\Model\Table\DecisionsTable $Decisions
 */
class DecisionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Meetings']
        ];
        $decisions = $this->paginate($this->Decisions);

        $this->set(compact('decisions'));
        $this->set('_serialize', ['decisions']);
    }

    /**
     * View method
     *
     * @param string|null $id Decision id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $decision = $this->Decisions->get($id, [
            'contain' => ['Meetings', 'Evidences', 'Administrations']
        ]);

        $this->set('decision', $decision);
        $this->set('_serialize', ['decision']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $decision = $this->Decisions->newEntity();
        if ($this->request->is('post')) {
            $decision = $this->Decisions->patchEntity($decision, $this->request->data);
            if ($this->Decisions->save($decision)) {
                $this->Flash->success(__('The decision has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The decision could not be saved. Please, try again.'));
            }
        }
        $meetings = $this->Decisions->Meetings->find('list', ['limit' => 200]);
        $evidences = $this->Decisions->Evidences->find('list', ['limit' => 200]);
        $this->set(compact('decision', 'meetings', 'evidences'));
        $this->set('_serialize', ['decision']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Decision id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $decision = $this->Decisions->get($id, [
            'contain' => ['Evidences']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $decision = $this->Decisions->patchEntity($decision, $this->request->data);
            if ($this->Decisions->save($decision)) {
                $this->Flash->success(__('The decision has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The decision could not be saved. Please, try again.'));
            }
        }
        $meetings = $this->Decisions->Meetings->find('list', ['limit' => 200]);
        $evidences = $this->Decisions->Evidences->find('list', ['limit' => 200]);
        $this->set(compact('decision', 'meetings', 'evidences'));
        $this->set('_serialize', ['decision']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Decision id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $decision = $this->Decisions->get($id);
        if ($this->Decisions->delete($decision)) {
            $this->Flash->success(__('The decision has been deleted.'));
        } else {
            $this->Flash->error(__('The decision could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
