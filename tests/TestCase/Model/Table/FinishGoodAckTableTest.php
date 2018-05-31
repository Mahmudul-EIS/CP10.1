<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FinishGoodAckTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FinishGoodAckTable Test Case
 */
class FinishGoodAckTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FinishGoodAckTable
     */
    public $FinishGoodAck;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.finish_good_ack'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('FinishGoodAck') ? [] : ['className' => 'App\Model\Table\FinishGoodAckTable'];
        $this->FinishGoodAck = TableRegistry::get('FinishGoodAck', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FinishGoodAck);

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
