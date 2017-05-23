<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * StudentsProjects Controller
 *
 * @property \App\Model\Table\StudentsProjectsTable $StudentsProjects
 */
class StudentsProjectsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Students', 'Projects']
        ];
        $studentsProjects = $this->paginate($this->StudentsProjects);

        $this->set(compact('studentsProjects'));
        $this->set('_serialize', ['studentsProjects']);
    }

    /**
     * View method
     *
     * @param string|null $id Students Project id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $studentsProject = $this->StudentsProjects->get($id, [
            'contain' => ['Students', 'Projects']
        ]);

        $this->set('studentsProject', $studentsProject);
        $this->set('_serialize', ['studentsProject']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $studentsProject = $this->StudentsProjects->newEntity();
        if ($this->request->is('post')) {
            $studentsProject = $this->StudentsProjects->patchEntity($studentsProject, $this->request->data);
            if ($this->StudentsProjects->save($studentsProject)) {
                $this->Flash->success(__('The students project has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The students project could not be saved. Please, try again.'));
        }
        $students = $this->StudentsProjects->Students->find('list', ['limit' => 200]);
        $projects = $this->StudentsProjects->Projects->find('list', ['limit' => 200]);
        $this->set(compact('studentsProject', 'students', 'projects'));
        $this->set('_serialize', ['studentsProject']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Students Project id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $studentsProject = $this->StudentsProjects->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $studentsProject = $this->StudentsProjects->patchEntity($studentsProject, $this->request->data);
            if ($this->StudentsProjects->save($studentsProject)) {
                $this->Flash->success(__('The students project has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The students project could not be saved. Please, try again.'));
        }
        $students = $this->StudentsProjects->Students->find('list', ['limit' => 200]);
        $projects = $this->StudentsProjects->Projects->find('list', ['limit' => 200]);
        $this->set(compact('studentsProject', 'students', 'projects'));
        $this->set('_serialize', ['studentsProject']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Students Project id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $studentsProject = $this->StudentsProjects->get($id);
        if ($this->StudentsProjects->delete($studentsProject)) {
            $this->Flash->success(__('The students project has been deleted.'));
        } else {
            $this->Flash->error(__('The students project could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
