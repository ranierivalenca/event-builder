<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegistrationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegistrationsTable Test Case
 */
class RegistrationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RegistrationsTable
     */
    public $Registrations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.registrations',
        'app.users',
        'app.registration',
        'app.events'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Registrations') ? [] : ['className' => 'App\Model\Table\RegistrationsTable'];
        $this->Registrations = TableRegistry::get('Registrations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Registrations);

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
