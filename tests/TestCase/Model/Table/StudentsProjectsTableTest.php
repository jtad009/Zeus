<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StudentsProjectsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StudentsProjectsTable Test Case
 */
class StudentsProjectsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StudentsProjectsTable
     */
    public $StudentsProjects;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.students_projects',
        'app.students',
        'app.faculties',
        'app.staffs',
        'app.staff_types',
        'app.departments',
        'app.courses',
        'app.projects',
        'app.programs',
        'app.program_types',
        'app.student_types',
        'app.place_of_births',
        'app.home_towns',
        'app.lgas',
        'app.states',
        'app.countries',
        'app.disabilities',
        'app.entry_modes',
        'app.sports',
        'app.disabilties',
        'app.documents',
        'app.document_categories'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StudentsProjects') ? [] : ['className' => 'App\Model\Table\StudentsProjectsTable'];
        $this->StudentsProjects = TableRegistry::get('StudentsProjects', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StudentsProjects);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
