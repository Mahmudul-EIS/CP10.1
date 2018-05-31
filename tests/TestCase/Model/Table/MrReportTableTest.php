<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MrReportTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MrReportTable Test Case
 */
class MrReportTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MrReportTable
     */
    public $MrReport;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mr_report'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MrReport') ? [] : ['className' => 'App\Model\Table\MrReportTable'];
        $this->MrReport = TableRegistry::get('MrReport', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MrReport);

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
