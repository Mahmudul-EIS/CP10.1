<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShipmentDetailsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShipmentDetailsTable Test Case
 */
class ShipmentDetailsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShipmentDetailsTable
     */
    public $ShipmentDetails;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shipment_details'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ShipmentDetails') ? [] : ['className' => 'App\Model\Table\ShipmentDetailsTable'];
        $this->ShipmentDetails = TableRegistry::get('ShipmentDetails', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ShipmentDetails);

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
