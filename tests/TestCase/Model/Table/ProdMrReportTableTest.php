<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProdMrReportTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProdMrReportTable Test Case
 */
class ProdMrReportTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProdMrReportTable
     */
    public $ProdMrReport;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.prod_mr_report',
        'app.prod_mrs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProdMrReport') ? [] : ['className' => ProdMrReportTable::class];
        $this->ProdMrReport = TableRegistry::get('ProdMrReport', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProdMrReport);

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
