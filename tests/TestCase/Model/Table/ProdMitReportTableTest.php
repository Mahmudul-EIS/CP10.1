<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProdMitReportTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProdMitReportTable Test Case
 */
class ProdMitReportTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProdMitReportTable
     */
    public $ProdMitReport;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.prod_mit_report',
        'app.prod_mits'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ProdMitReport') ? [] : ['className' => ProdMitReportTable::class];
        $this->ProdMitReport = TableRegistry::get('ProdMitReport', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProdMitReport);

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
