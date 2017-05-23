<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DisabiltiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DisabiltiesTable Test Case
 */
class DisabiltiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DisabiltiesTable
     */
    public $Disabilties;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.disabilties',
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
        $config = TableRegistry::exists('Disabilties') ? [] : ['className' => 'App\Model\Table\DisabiltiesTable'];
        $this->Disabilties = TableRegistry::get('Disabilties', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Disabilties);

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
