<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\NbdoReportTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\NbdoReportTable Test Case
 */
class NbdoReportTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\NbdoReportTable
     */
    public $NbdoReport;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.nbdo_report'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('NbdoReport') ? [] : ['className' => 'App\Model\Table\NbdoReportTable'];
        $this->NbdoReport = TableRegistry::get('NbdoReport', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->NbdoReport);

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
