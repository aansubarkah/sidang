<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssembliesUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssembliesUsersTable Test Case
 */
class AssembliesUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AssembliesUsersTable
     */
    public $AssembliesUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.assemblies_users',
        'app.assemblies',
        'app.meetings',
        'app.cases',
        'app.assemblies_cases',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AssembliesUsers') ? [] : ['className' => 'App\Model\Table\AssembliesUsersTable'];
        $this->AssembliesUsers = TableRegistry::get('AssembliesUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AssembliesUsers);

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
