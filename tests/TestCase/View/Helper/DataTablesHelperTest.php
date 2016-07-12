<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\DataTablesHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\DataTablesHelper Test Case
 */
class DataTablesHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\DataTablesHelper
     */
    public $DataTables;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->DataTables = new DataTablesHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DataTables);

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
