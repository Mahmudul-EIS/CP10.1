<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LogisticFinishGoodTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LogisticFinishGoodTable Test Case
 */
class LogisticFinishGoodTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LogisticFinishGoodTable
     */
    public $LogisticFinishGood;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.logistic_finish_good'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('LogisticFinishGood') ? [] : ['className' => 'App\Model\Table\LogisticFinishGoodTable'];
        $this->LogisticFinishGood = TableRegistry::get('LogisticFinishGood', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->LogisticFinishGood);

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
