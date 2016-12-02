<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CausesClientsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CausesClientsTable Test Case
 */
class CausesClientsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CausesClientsTable
     */
    public $CausesClients;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.causes_clients',
        'app.causes',
        'app.categories',
        'app.meetings',
        'app.assemblies',
        'app.cases',
        'app.assemblies_cases',
        'app.users',
        'app.assemblies_users',
        'app.assemblies_causes',
        'app.clients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CausesClients') ? [] : ['className' => 'App\Model\Table\CausesClientsTable'];
        $this->CausesClients = TableRegistry::get('CausesClients', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CausesClients);

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
