<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResolvesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResolvesTable Test Case
 */
class ResolvesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ResolvesTable
     */
    public $Resolves;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.resolves',
        'app.issues'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Resolves') ? [] : ['className' => 'App\Model\Table\ResolvesTable'];
        $this->Resolves = TableRegistry::get('Resolves', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Resolves);

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
