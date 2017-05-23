<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EntryModesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EntryModesTable Test Case
 */
class EntryModesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EntryModesTable
     */
    public $EntryModes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.entry_modes',
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
        $config = TableRegistry::exists('EntryModes') ? [] : ['className' => 'App\Model\Table\EntryModesTable'];
        $this->EntryModes = TableRegistry::get('EntryModes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EntryModes);

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
