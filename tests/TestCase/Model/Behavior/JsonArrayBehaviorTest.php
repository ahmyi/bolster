<?php
namespace App\Test\TestCase\Model\Behavior;

use App\Model\Behavior\JsonArrayBehavior;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Behavior\JsonArrayBehavior Test Case
 */
class JsonArrayBehaviorTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Behavior\JsonArrayBehavior
     */
    public $JsonArray;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->JsonArray = new JsonArrayBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JsonArray);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
