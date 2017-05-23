<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StaffTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StaffTypesTable Test Case
 */
class StaffTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StaffTypesTable
     */
    public $StaffTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.staff_types',
        'app.staffs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('StaffTypes') ? [] : ['className' => 'App\Model\Table\StaffTypesTable'];
        $this->StaffTypes = TableRegistry::get('StaffTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StaffTypes);

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
