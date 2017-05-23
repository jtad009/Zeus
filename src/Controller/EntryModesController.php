<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EntryModes Controller
 *
 * @property \App\Model\Table\EntryModesTable $EntryModes
 */
class EntryModesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $entryModes = $this->paginate($this->EntryModes);

        $this->set(compact('entryModes'));
        $this->set('_serialize', ['entryModes']);
    }

    /**
     * View method
     *
     * @param string|null $id Entry Mode id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entryMode = $this->EntryModes->get($id, [
            'contain' => ['Students']
        ]);

        $this->set('entryMode', $entryMode);
        $this->set('_serialize', ['entryMode']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entryMode = $this->EntryModes->newEntity();
        if ($this->request->is('post')) {
            $entryMode = $this->EntryModes->patchEntity($entryMode, $this->request->data);
            if ($this->EntryModes->save($entryMode)) {
                $this->Flash->success(__('The entry mode has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entry mode could not be saved. Please, try again.'));
        }
        $this->set(compact('entryMode'));
        $this->set('_serialize', ['entryMode']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Entry Mode id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entryMode = $this->EntryModes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entryMode = $this->EntryModes->patchEntity($entryMode, $this->request->data);
            if ($this->EntryModes->save($entryMode)) {
                $this->Flash->success(__('The entry mode has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entry mode could not be saved. Please, try again.'));
        }
        $this->set(compact('entryMode'));
        $this->set('_serialize', ['entryMode']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Entry Mode id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entryMode = $this->EntryModes->get($id);
        if ($this->EntryModes->delete($entryMode)) {
            $this->Flash->success(__('The entry mode has been deleted.'));
        } else {
            $this->Flash->error(__('The entry mode could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
