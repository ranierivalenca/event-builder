<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PapersFilesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PapersFilesTable Test Case
 */
class PapersFilesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PapersFilesTable
     */
    public $PapersFiles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.papers_files',
        'app.papers',
        'app.users',
        'app.registration',
        'app.files'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PapersFiles') ? [] : ['className' => 'App\Model\Table\PapersFilesTable'];
        $this->PapersFiles = TableRegistry::get('PapersFiles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PapersFiles);

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
