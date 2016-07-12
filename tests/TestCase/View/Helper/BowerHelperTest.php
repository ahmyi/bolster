<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\BowerHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\BowerHelper Test Case
 */
class BowerHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\BowerHelper
     */
    public $Bower;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Bower = new BowerHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bower);

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
