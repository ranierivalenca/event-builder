<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RecoverycodesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RecoverycodesTable Test Case
 */
class RecoverycodesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RecoverycodesTable
     */
    public $Recoverycodes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.recoverycodes',
        'app.users',
        'app.registration'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Recoverycodes') ? [] : ['className' => 'App\Model\Table\RecoverycodesTable'];
        $this->Recoverycodes = TableRegistry::get('Recoverycodes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Recoverycodes);

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
