<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssembliesCasesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssembliesCasesTable Test Case
 */
class AssembliesCasesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AssembliesCasesTable
     */
    public $AssembliesCases;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.assemblies_cases',
        'app.assemblies',
        'app.meetings',
        'app.cases',
        'app.users',
        'app.assemblies_users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AssembliesCases') ? [] : ['className' => 'App\Model\Table\AssembliesCasesTable'];
        $this->AssembliesCases = TableRegistry::get('AssembliesCases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AssembliesCases);

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
