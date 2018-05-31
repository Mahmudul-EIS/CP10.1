<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ScnReportTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ScnReportTable Test Case
 */
class ScnReportTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ScnReportTable
     */
    public $ScnReport;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.scn_report'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ScnReport') ? [] : ['className' => 'App\Model\Table\ScnReportTable'];
        $this->ScnReport = TableRegistry::get('ScnReport', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ScnReport);

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
