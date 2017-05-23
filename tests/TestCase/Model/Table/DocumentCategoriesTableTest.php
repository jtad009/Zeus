<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DocumentCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DocumentCategoriesTable Test Case
 */
class DocumentCategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DocumentCategoriesTable
     */
    public $DocumentCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.document_categories',
        'app.documents'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('DocumentCategories') ? [] : ['className' => 'App\Model\Table\DocumentCategoriesTable'];
        $this->DocumentCategories = TableRegistry::get('DocumentCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DocumentCategories);

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
