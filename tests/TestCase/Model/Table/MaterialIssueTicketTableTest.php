<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MaterialIssueTicketTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MaterialIssueTicketTable Test Case
 */
class MaterialIssueTicketTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MaterialIssueTicketTable
     */
    public $MaterialIssueTicket;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.material_issue_ticket'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MaterialIssueTicket') ? [] : ['className' => 'App\Model\Table\MaterialIssueTicketTable'];
        $this->MaterialIssueTicket = TableRegistry::get('MaterialIssueTicket', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MaterialIssueTicket);

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
