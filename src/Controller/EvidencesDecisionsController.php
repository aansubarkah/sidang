<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EvidencesDecisions Controller
 *
 * @property \App\Model\Table\EvidencesDecisionsTable $EvidencesDecisions
 */
class EvidencesDecisionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Evidences', 'Decisions']
        ];
        $evidencesDecisions = $this->paginate($this->EvidencesDecisions);

        $this->set(compact('evidencesDecisions'));
        $this->set('_serialize', ['evidencesDecisions']);
    }

    /**
     * View method
     *
     * @param string|null $id Evidences Decision id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evidencesDecision = $this->EvidencesDecisions->get($id, [
            'contain' => ['Evidences', 'Decisions']
        ]);

        $this->set('evidencesDecision', $evidencesDecision);
        $this->set('_serialize', ['evidencesDecision']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $evidencesDecision = $this->EvidencesDecisions->newEntity();
        if ($this->request->is('post')) {
            $evidencesDecision = $this->EvidencesDecisions->patchEntity($evidencesDecision, $this->request->data);
            if ($this->EvidencesDecisions->save($evidencesDecision)) {
                $this->Flash->success(__('The evidences decision has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evidences decision could not be saved. Please, try again.'));
            }
        }
        $evidences = $this->EvidencesDecisions->Evidences->find('list', ['limit' => 200]);
        $decisions = $this->EvidencesDecisions->Decisions->find('list', ['limit' => 200]);
        $this->set(compact('evidencesDecision', 'evidences', 'decisions'));
        $this->set('_serialize', ['evidencesDecision']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Evidences Decision id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evidencesDecision = $this->EvidencesDecisions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evidencesDecision = $this->EvidencesDecisions->patchEntity($evidencesDecision, $this->request->data);
            if ($this->EvidencesDecisions->save($evidencesDecision)) {
                $this->Flash->success(__('The evidences decision has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evidences decision could not be saved. Please, try again.'));
            }
        }
        $evidences = $this->EvidencesDecisions->Evidences->find('list', ['limit' => 200]);
        $decisions = $this->EvidencesDecisions->Decisions->find('list', ['limit' => 200]);
        $this->set(compact('evidencesDecision', 'evidences', 'decisions'));
        $this->set('_serialize', ['evidencesDecision']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Evidences Decision id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evidencesDecision = $this->EvidencesDecisions->get($id);
        if ($this->EvidencesDecisions->delete($evidencesDecision)) {
            $this->Flash->success(__('The evidences decision has been deleted.'));
        } else {
            $this->Flash->error(__('The evidences decision could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
