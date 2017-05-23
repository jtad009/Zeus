<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DocumentCategories Controller
 *
 * @property \App\Model\Table\DocumentCategoriesTable $DocumentCategories
 */
class DocumentCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $documentCategories = $this->paginate($this->DocumentCategories);

        $this->set(compact('documentCategories'));
        $this->set('_serialize', ['documentCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Document Category id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $documentCategory = $this->DocumentCategories->get($id, [
            'contain' => ['Documents']
        ]);

        $this->set('documentCategory', $documentCategory);
        $this->set('_serialize', ['documentCategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $documentCategory = $this->DocumentCategories->newEntity();
        if ($this->request->is('post')) {
            $documentCategory = $this->DocumentCategories->patchEntity($documentCategory, $this->request->data);
            if ($this->DocumentCategories->save($documentCategory)) {
                $this->Flash->success(__('The document category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The document category could not be saved. Please, try again.'));
        }
        $this->set(compact('documentCategory'));
        $this->set('_serialize', ['documentCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Document Category id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $documentCategory = $this->DocumentCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $documentCategory = $this->DocumentCategories->patchEntity($documentCategory, $this->request->data);
            if ($this->DocumentCategories->save($documentCategory)) {
                $this->Flash->success(__('The document category has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The document category could not be saved. Please, try again.'));
        }
        $this->set(compact('documentCategory'));
        $this->set('_serialize', ['documentCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Document Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $documentCategory = $this->DocumentCategories->get($id);
        if ($this->DocumentCategories->delete($documentCategory)) {
            $this->Flash->success(__('The document category has been deleted.'));
        } else {
            $this->Flash->error(__('The document category could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
