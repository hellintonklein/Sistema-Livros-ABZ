<?php
namespace App\Test\TestCase\Form;

use App\Form\DisciplinesForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\DisciplinesForm Test Case
 */
class DisciplinesFormTest extends TestCase
{

    /**
     * Test subject     *
     * @var \App\Form\DisciplinesForm     */
    public $Disciplines;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Disciplines = new DisciplinesForm();    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Disciplines);

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
