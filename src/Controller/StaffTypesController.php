<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StaffTypes Controller
 *
 * @property \App\Model\Table\StaffTypesTable $StaffTypes
 */
class StaffTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $staffTypes = $this->paginate($this->StaffTypes);

        $this->set(compact('staffTypes'));
        $this->set('_serialize', ['staffTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Staff Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $staffType = $this->StaffTypes->get($id, [
            'contain' => ['Staffs']
        ]);

        $this->set('staffType', $staffType);
        $this->set('_serialize', ['staffType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $staffType = $this->StaffTypes->newEntity();
        if ($this->request->is('post')) {
            $staffType = $this->StaffTypes->patchEntity($staffType, $this->request->data);
            if ($this->StaffTypes->save($staffType)) {
                $this->Flash->success(__('The staff type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The staff type could not be saved. Please, try again.'));
        }
        $this->set(compact('staffType'));
        $this->set('_serialize', ['staffType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Staff Type id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $staffType = $this->StaffTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $staffType = $this->StaffTypes->patchEntity($staffType, $this->request->data);
            if ($this->StaffTypes->save($staffType)) {
                $this->Flash->success(__('The staff type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The staff type could not be saved. Please, try again.'));
        }
        $this->set(compact('staffType'));
        $this->set('_serialize', ['staffType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Staff Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $staffType = $this->StaffTypes->get($id);
        if ($this->StaffTypes->delete($staffType)) {
            $this->Flash->success(__('The staff type has been deleted.'));
        } else {
            $this->Flash->error(__('The staff type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
