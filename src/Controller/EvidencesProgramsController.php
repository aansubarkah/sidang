<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EvidencesPrograms Controller
 *
 * @property \App\Model\Table\EvidencesProgramsTable $EvidencesPrograms
 */
class EvidencesProgramsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Evidences', 'Programs']
        ];
        $evidencesPrograms = $this->paginate($this->EvidencesPrograms);

        $this->set(compact('evidencesPrograms'));
        $this->set('_serialize', ['evidencesPrograms']);
    }

    /**
     * View method
     *
     * @param string|null $id Evidences Program id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $evidencesProgram = $this->EvidencesPrograms->get($id, [
            'contain' => ['Evidences', 'Programs']
        ]);

        $this->set('evidencesProgram', $evidencesProgram);
        $this->set('_serialize', ['evidencesProgram']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $evidencesProgram = $this->EvidencesPrograms->newEntity();
        if ($this->request->is('post')) {
            $evidencesProgram = $this->EvidencesPrograms->patchEntity($evidencesProgram, $this->request->data);
            if ($this->EvidencesPrograms->save($evidencesProgram)) {
                $this->Flash->success(__('The evidences program has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evidences program could not be saved. Please, try again.'));
            }
        }
        $evidences = $this->EvidencesPrograms->Evidences->find('list', ['limit' => 200]);
        $programs = $this->EvidencesPrograms->Programs->find('list', ['limit' => 200]);
        $this->set(compact('evidencesProgram', 'evidences', 'programs'));
        $this->set('_serialize', ['evidencesProgram']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Evidences Program id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $evidencesProgram = $this->EvidencesPrograms->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $evidencesProgram = $this->EvidencesPrograms->patchEntity($evidencesProgram, $this->request->data);
            if ($this->EvidencesPrograms->save($evidencesProgram)) {
                $this->Flash->success(__('The evidences program has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The evidences program could not be saved. Please, try again.'));
            }
        }
        $evidences = $this->EvidencesPrograms->Evidences->find('list', ['limit' => 200]);
        $programs = $this->EvidencesPrograms->Programs->find('list', ['limit' => 200]);
        $this->set(compact('evidencesProgram', 'evidences', 'programs'));
        $this->set('_serialize', ['evidencesProgram']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Evidences Program id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $evidencesProgram = $this->EvidencesPrograms->get($id);
        if ($this->EvidencesPrograms->delete($evidencesProgram)) {
            $this->Flash->success(__('The evidences program has been deleted.'));
        } else {
            $this->Flash->error(__('The evidences program could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
