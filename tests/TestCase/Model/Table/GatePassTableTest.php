<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GatePassTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GatePassTable Test Case
 */
class GatePassTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GatePassTable
     */
    public $GatePass;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gate_pass'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GatePass') ? [] : ['className' => 'App\Model\Table\GatePassTable'];
        $this->GatePass = TableRegistry::get('GatePass', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GatePass);

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
