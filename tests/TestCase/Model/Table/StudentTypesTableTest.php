<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StudentTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StudentTypesTable Test Case
 */
class StudentTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StudentTypesTable
     */
    public $StudentTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.student_types',
        'app.students'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StudentTypes') ? [] : ['className' => 'App\Model\Table\StudentTypesTable'];
        $this->StudentTypes = TableRegistry::get('StudentTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StudentTypes);

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
}
