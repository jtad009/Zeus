<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StudentTypes Controller
 *
 * @property \App\Model\Table\StudentTypesTable $StudentTypes
 */
class StudentTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $studentTypes = $this->paginate($this->StudentTypes);

        $this->set(compact('studentTypes'));
        $this->set('_serialize', ['studentTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Student Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $studentType = $this->StudentTypes->get($id, [
            'contain' => ['Students']
        ]);

        $this->set('studentType', $studentType);
        $this->set('_serialize', ['studentType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $studentType = $this->StudentTypes->newEntity();
        if ($this->request->is('post')) {
            $studentType = $this->StudentTypes->patchEntity($studentType, $this->request->data);
            if ($this->StudentTypes->save($studentType)) {
                $this->Flash->success(__('The student type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student type could not be saved. Please, try again.'));
        }
        $this->set(compact('studentType'));
        $this->set('_serialize', ['studentType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Student Type id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $studentType = $this->StudentTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $studentType = $this->StudentTypes->patchEntity($studentType, $this->request->data);
            if ($this->StudentTypes->save($studentType)) {
                $this->Flash->success(__('The student type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student type could not be saved. Please, try again.'));
        }
        $this->set(compact('studentType'));
        $this->set('_serialize', ['studentType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Student Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $studentType = $this->StudentTypes->get($id);
        if ($this->StudentTypes->delete($studentType)) {
            $this->Flash->success(__('The student type has been deleted.'));
        } else {
            $this->Flash->error(__('The student type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
