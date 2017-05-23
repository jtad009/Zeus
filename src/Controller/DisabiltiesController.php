<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Disabilties Controller
 *
 * @property \App\Model\Table\DisabiltiesTable $Disabilties
 */
class DisabiltiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students']
        ];
        $disabilties = $this->paginate($this->Disabilties);

        $this->set(compact('disabilties'));
        $this->set('_serialize', ['disabilties']);
    }

    /**
     * View method
     *
     * @param string|null $id Disabilty id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $disabilty = $this->Disabilties->get($id, [
            'contain' => ['Students']
        ]);

        $this->set('disabilty', $disabilty);
        $this->set('_serialize', ['disabilty']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $disabilty = $this->Disabilties->newEntity();
        if ($this->request->is('post')) {
            $disabilty = $this->Disabilties->patchEntity($disabilty, $this->request->data);
            if ($this->Disabilties->save($disabilty)) {
                $this->Flash->success(__('The disabilty has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disabilty could not be saved. Please, try again.'));
        }
        $students = $this->Disabilties->Students->find('list', ['limit' => 200]);
        $this->set(compact('disabilty', 'students'));
        $this->set('_serialize', ['disabilty']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Disabilty id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $disabilty = $this->Disabilties->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $disabilty = $this->Disabilties->patchEntity($disabilty, $this->request->data);
            if ($this->Disabilties->save($disabilty)) {
                $this->Flash->success(__('The disabilty has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The disabilty could not be saved. Please, try again.'));
        }
        $students = $this->Disabilties->Students->find('list', ['limit' => 200]);
        $this->set(compact('disabilty', 'students'));
        $this->set('_serialize', ['disabilty']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Disabilty id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $disabilty = $this->Disabilties->get($id);
        if ($this->Disabilties->delete($disabilty)) {
            $this->Flash->success(__('The disabilty has been deleted.'));
        } else {
            $this->Flash->error(__('The disabilty could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
