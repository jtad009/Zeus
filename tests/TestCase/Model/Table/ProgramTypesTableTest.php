<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProgramTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProgramTypesTable Test Case
 */
class ProgramTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProgramTypesTable
     */
    public $ProgramTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.program_types',
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
        $config = TableRegistry::exists('ProgramTypes') ? [] : ['className' => 'App\Model\Table\ProgramTypesTable'];
        $this->ProgramTypes = TableRegistry::get('ProgramTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProgramTypes);

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
