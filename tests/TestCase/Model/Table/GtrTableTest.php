<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GtrTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GtrTable Test Case
 */
class GtrTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GtrTable
     */
    public $Gtr;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.gtr'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Gtr') ? [] : ['className' => 'App\Model\Table\GtrTable'];
        $this->Gtr = TableRegistry::get('Gtr', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Gtr);

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
