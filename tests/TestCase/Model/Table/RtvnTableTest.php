<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RtvnTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RtvnTable Test Case
 */
class RtvnTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RtvnTable
     */
    public $Rtvn;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.rtvn'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Rtvn') ? [] : ['className' => 'App\Model\Table\RtvnTable'];
        $this->Rtvn = TableRegistry::get('Rtvn', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Rtvn);

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
