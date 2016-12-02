<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Meetings Controller
 *
 * @property \App\Model\Table\MeetingsTable $Meetings
 */
class MeetingsController extends AppController
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
        $meetings = $this->paginate($this->Meetings);

        $this->set(compact('meetings'));
        $this->set('_serialize', ['meetings']);
    }

    /**
     * View method
     *
     * @param string|null $id Meeting id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $meeting = $this->Meetings->get($id, [
            'contain' => ['Assemblies', 'Causes', 'Decisions', 'Programs']
        ]);

        $this->set('meeting', $meeting);
        $this->set('_serialize', ['meeting']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $meeting = $this->Meetings->newEntity();
        if ($this->request->is('post')) {
            $meeting = $this->Meetings->patchEntity($meeting, $this->request->data);
            if ($this->Meetings->save($meeting)) {
                $this->Flash->success(__('The meeting has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The meeting could not be saved. Please, try again.'));
            }
        }
        $assemblies = $this->Meetings->Assemblies->find('list', ['limit' => 200]);
        $causes = $this->Meetings->Causes->find('list', ['limit' => 200]);
        $this->set(compact('meeting', 'assemblies', 'causes'));
        $this->set('_serialize', ['meeting']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Meeting id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $meeting = $this->Meetings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $meeting = $this->Meetings->patchEntity($meeting, $this->request->data);
            if ($this->Meetings->save($meeting)) {
                $this->Flash->success(__('The meeting has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The meeting could not be saved. Please, try again.'));
            }
        }
        $assemblies = $this->Meetings->Assemblies->find('list', ['limit' => 200]);
        $causes = $this->Meetings->Causes->find('list', ['limit' => 200]);
        $this->set(compact('meeting', 'assemblies', 'causes'));
        $this->set('_serialize', ['meeting']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Meeting id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $meeting = $this->Meetings->get($id);
        if ($this->Meetings->delete($meeting)) {
            $this->Flash->success(__('The meeting has been deleted.'));
        } else {
            $this->Flash->error(__('The meeting could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
