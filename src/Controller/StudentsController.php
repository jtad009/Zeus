<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Students Controller
 *
 * @property \App\Model\Table\StudentsTable $Students
 */
class StudentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Faculties', 'Departments', 'Programs', 'ProgramTypes', 'StudentTypes', 'PlaceOfBirths', 'HomeTowns', 'Lgas', 'States', 'Countries', 'Disabilities', 'EntryModes', 'Sports']
        ];
        $students = $this->paginate($this->Students);

        $this->set(compact('students'));
        $this->set('_serialize', ['students']);
    }

    /**
     * View method
     *
     * @param string|null $id Student id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $student = $this->Students->get($id, [
            'contain' => ['Faculties', 'Departments', 'Programs', 'ProgramTypes', 'StudentTypes', 'PlaceOfBirths', 'HomeTowns', 'Lgas', 'States', 'Countries', 'Disabilities', 'EntryModes', 'Sports', 'Projects', 'Disabilties', 'Documents']
        ]);

        $this->set('student', $student);
        $this->set('_serialize', ['student']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $student = $this->Students->newEntity();
        if ($this->request->is('post')) {
            $student = $this->Students->patchEntity($student, $this->request->data);
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }
        $faculties = $this->Students->Faculties->find('list', ['limit' => 200]);
        $departments = $this->Students->Departments->find('list', ['limit' => 200]);
        $programs = $this->Students->Programs->find('list', ['limit' => 200]);
        $programTypes = $this->Students->ProgramTypes->find('list', ['limit' => 200]);
        $studentTypes = $this->Students->StudentTypes->find('list', ['limit' => 200]);
        $placeOfBirths = $this->Students->PlaceOfBirths->find('list', ['limit' => 200]);
        $homeTowns = $this->Students->HomeTowns->find('list', ['limit' => 200]);
        $lgas = $this->Students->Lgas->find('list', ['limit' => 200]);
        $states = $this->Students->States->find('list', ['limit' => 200]);
        $countries = $this->Students->Countries->find('list', ['limit' => 200]);
        $disabilities = $this->Students->Disabilities->find('list', ['limit' => 200]);
        $entryModes = $this->Students->EntryModes->find('list', ['limit' => 200]);
        $sports = $this->Students->Sports->find('list', ['limit' => 200]);
        $projects = $this->Students->Projects->find('list', ['limit' => 200]);
        $this->set(compact('student', 'faculties', 'departments', 'programs', 'programTypes', 'studentTypes', 'placeOfBirths', 'homeTowns', 'lgas', 'states', 'countries', 'disabilities', 'entryModes', 'sports', 'projects'));
        $this->set('_serialize', ['student']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Student id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $student = $this->Students->get($id, [
            'contain' => ['Projects']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $student = $this->Students->patchEntity($student, $this->request->data);
            if ($this->Students->save($student)) {
                $this->Flash->success(__('The student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The student could not be saved. Please, try again.'));
        }
        $faculties = $this->Students->Faculties->find('list', ['limit' => 200]);
        $departments = $this->Students->Departments->find('list', ['limit' => 200]);
        $programs = $this->Students->Programs->find('list', ['limit' => 200]);
        $programTypes = $this->Students->ProgramTypes->find('list', ['limit' => 200]);
        $studentTypes = $this->Students->StudentTypes->find('list', ['limit' => 200]);
        $placeOfBirths = $this->Students->PlaceOfBirths->find('list', ['limit' => 200]);
        $homeTowns = $this->Students->HomeTowns->find('list', ['limit' => 200]);
        $lgas = $this->Students->Lgas->find('list', ['limit' => 200]);
        $states = $this->Students->States->find('list', ['limit' => 200]);
        $countries = $this->Students->Countries->find('list', ['limit' => 200]);
        $disabilities = $this->Students->Disabilities->find('list', ['limit' => 200]);
        $entryModes = $this->Students->EntryModes->find('list', ['limit' => 200]);
        $sports = $this->Students->Sports->find('list', ['limit' => 200]);
        $projects = $this->Students->Projects->find('list', ['limit' => 200]);
        $this->set(compact('student', 'faculties', 'departments', 'programs', 'programTypes', 'studentTypes', 'placeOfBirths', 'homeTowns', 'lgas', 'states', 'countries', 'disabilities', 'entryModes', 'sports', 'projects'));
        $this->set('_serialize', ['student']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Student id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $student = $this->Students->get($id);
        if ($this->Students->delete($student)) {
            $this->Flash->success(__('The student has been deleted.'));
        } else {
            $this->Flash->error(__('The student could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
