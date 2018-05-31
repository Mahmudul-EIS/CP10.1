<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ReceiveAckTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ReceiveAckTable Test Case
 */
class ReceiveAckTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ReceiveAckTable
     */
    public $ReceiveAck;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.receive_ack'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ReceiveAck') ? [] : ['className' => 'App\Model\Table\ReceiveAckTable'];
        $this->ReceiveAck = TableRegistry::get('ReceiveAck', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ReceiveAck);

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
