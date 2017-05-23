<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProgramTypes Controller
 *
 * @property \App\Model\Table\ProgramTypesTable $ProgramTypes
 */
class ProgramTypesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $programTypes = $this->paginate($this->ProgramTypes);

        $this->set(compact('programTypes'));
        $this->set('_serialize', ['programTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Program Type id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $programType = $this->ProgramTypes->get($id, [
            'contain' => ['Students']
        ]);

        $this->set('programType', $programType);
        $this->set('_serialize', ['programType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $programType = $this->ProgramTypes->newEntity();
        if ($this->request->is('post')) {
            $programType = $this->ProgramTypes->patchEntity($programType, $this->request->data);
            if ($this->ProgramTypes->save($programType)) {
                $this->Flash->success(__('The program type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The program type could not be saved. Please, try again.'));
        }
        $this->set(compact('programType'));
        $this->set('_serialize', ['programType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Program Type id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $programType = $this->ProgramTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $programType = $this->ProgramTypes->patchEntity($programType, $this->request->data);
            if ($this->ProgramTypes->save($programType)) {
                $this->Flash->success(__('The program type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The program type could not be saved. Please, try again.'));
        }
        $this->set(compact('programType'));
        $this->set('_serialize', ['programType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Program Type id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $programType = $this->ProgramTypes->get($id);
        if ($this->ProgramTypes->delete($programType)) {
            $this->Flash->success(__('The program type has been deleted.'));
        } else {
            $this->Flash->error(__('The program type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
