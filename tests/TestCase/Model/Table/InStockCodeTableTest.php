<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InStockCodeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InStockCodeTable Test Case
 */
class InStockCodeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InStockCodeTable
     */
    public $InStockCode;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.in_stock_code'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('InStockCode') ? [] : ['className' => 'App\Model\Table\InStockCodeTable'];
        $this->InStockCode = TableRegistry::get('InStockCode', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->InStockCode);

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
