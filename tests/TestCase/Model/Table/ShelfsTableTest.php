<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShelfsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShelfsTable Test Case
 */
class ShelfsTableTest extends TestCase
{

    /**
     * Test subject     *
     * @var \App\Model\Table\ShelfsTable     */
    public $Shelfs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.shelfs',
        'app.users',
        'app.books'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Shelfs') ? [] : ['className' => ShelfsTable::class];        $this->Shelfs = TableRegistry::get('Shelfs', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Shelfs);

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
