<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CausesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CausesTable Test Case
 */
class CausesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CausesTable
     */
    public $Causes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.causes',
        'app.categories',
        'app.meetings',
        'app.assemblies',
        'app.cases',
        'app.assemblies_cases',
        'app.users',
        'app.assemblies_users',
        'app.assemblies_causes',
        'app.clients',
        'app.causes_clients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Causes') ? [] : ['className' => 'App\Model\Table\CausesTable'];
        $this->Causes = TableRegistry::get('Causes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Causes);

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
