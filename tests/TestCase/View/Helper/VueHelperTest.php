<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\VueHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\VueHelper Test Case
 */
class VueHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\VueHelper
     */
    public $Vue;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Vue = new VueHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vue);

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
