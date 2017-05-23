<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lgas Controller
 *
 * @property \App\Model\Table\LgasTable $Lgas
 */
class LgasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['States']
        ];
        $lgas = $this->paginate($this->Lgas);

        $this->set(compact('lgas'));
        $this->set('_serialize', ['lgas']);
    }

    /**
     * View method
     *
     * @param string|null $id Lga id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lga = $this->Lgas->get($id, [
            'contain' => ['States', 'Students']
        ]);

        $this->set('lga', $lga);
        $this->set('_serialize', ['lga']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lga = $this->Lgas->newEntity();
        if ($this->request->is('post')) {
            $lga = $this->Lgas->patchEntity($lga, $this->request->data);
            if ($this->Lgas->save($lga)) {
                $this->Flash->success(__('The lga has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lga could not be saved. Please, try again.'));
        }
        $states = $this->Lgas->States->find('list', ['limit' => 200]);
        $this->set(compact('lga', 'states'));
        $this->set('_serialize', ['lga']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lga id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lga = $this->Lgas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lga = $this->Lgas->patchEntity($lga, $this->request->data);
            if ($this->Lgas->save($lga)) {
                $this->Flash->success(__('The lga has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lga could not be saved. Please, try again.'));
        }
        $states = $this->Lgas->States->find('list', ['limit' => 200]);
        $this->set(compact('lga', 'states'));
        $this->set('_serialize', ['lga']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lga id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lga = $this->Lgas->get($id);
        if ($this->Lgas->delete($lga)) {
            $this->Flash->success(__('The lga has been deleted.'));
        } else {
            $this->Flash->error(__('The lga could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
