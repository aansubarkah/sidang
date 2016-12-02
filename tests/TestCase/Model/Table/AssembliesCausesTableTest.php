<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssembliesCausesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssembliesCausesTable Test Case
 */
class AssembliesCausesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AssembliesCausesTable
     */
    public $AssembliesCauses;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.assemblies_causes',
        'app.assemblies',
        'app.meetings',
        'app.cases',
        'app.assemblies_cases',
        'app.users',
        'app.assemblies_users',
        'app.causes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AssembliesCauses') ? [] : ['className' => 'App\Model\Table\AssembliesCausesTable'];
        $this->AssembliesCauses = TableRegistry::get('AssembliesCauses', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AssembliesCauses);

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
