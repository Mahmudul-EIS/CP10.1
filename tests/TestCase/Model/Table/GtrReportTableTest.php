<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GtrReportTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GtrReportTable Test Case
 */
class GtrReportTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GtrReportTable
     */
    public $GtrReport;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gtr_report'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('GtrReport') ? [] : ['className' => 'App\Model\Table\GtrReportTable'];
        $this->GtrReport = TableRegistry::get('GtrReport', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->GtrReport);

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
