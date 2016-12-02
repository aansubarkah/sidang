<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssembliesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssembliesTable Test Case
 */
class AssembliesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AssembliesTable
     */
    public $Assemblies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.assemblies',
        'app.meetings',
        'app.cases',
        'app.assemblies_cases',
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
        $config = TableRegistry::exists('Assemblies') ? [] : ['className' => 'App\Model\Table\AssembliesTable'];
        $this->Assemblies = TableRegistry::get('Assemblies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Assemblies);

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
}
