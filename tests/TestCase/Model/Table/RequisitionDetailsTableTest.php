<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RequisitionDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RequisitionDetailsTable Test Case
 */
class RequisitionDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RequisitionDetailsTable
     */
    public $RequisitionDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.requisition_details'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('RequisitionDetails') ? [] : ['className' => 'App\Model\Table\RequisitionDetailsTable'];
        $this->RequisitionDetails = TableRegistry::get('RequisitionDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RequisitionDetails);

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
