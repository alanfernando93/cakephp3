<?php
namespace App\Test\TestCase\View\Helper;

use App\View\Helper\FunctionsHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\FunctionsHelper Test Case
 */
class FunctionsHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\View\Helper\FunctionsHelper
     */
    public $Functions;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Functions = new FunctionsHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Functions);

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
