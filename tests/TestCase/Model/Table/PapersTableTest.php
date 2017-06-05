<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PapersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PapersTable Test Case
 */
class PapersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PapersTable
     */
    public $Papers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.papers',
        'app.users',
        'app.registration',
        'app.files',
        'app.papers_files'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Papers') ? [] : ['className' => 'App\Model\Table\PapersTable'];
        $this->Papers = TableRegistry::get('Papers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Papers);

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
