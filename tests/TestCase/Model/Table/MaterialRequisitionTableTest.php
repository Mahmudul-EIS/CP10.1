<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterialRequisitionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterialRequisitionTable Test Case
 */
class MaterialRequisitionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterialRequisitionTable
     */
    public $MaterialRequisition;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.material_requisition'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MaterialRequisition') ? [] : ['className' => 'App\Model\Table\MaterialRequisitionTable'];
        $this->MaterialRequisition = TableRegistry::get('MaterialRequisition', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MaterialRequisition);

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
