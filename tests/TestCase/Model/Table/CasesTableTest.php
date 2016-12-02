<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CasesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CasesTable Test Case
 */
class CasesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CasesTable
     */
    public $Cases;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cases',
        'app.categories',
        'app.meetings',
        'app.assemblies',
        'app.assemblies_cases',
        'app.users',
        'app.assemblies_users',
        'app.clients',
        'app.cases_clients'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Cases') ? [] : ['className' => 'App\Model\Table\CasesTable'];
        $this->Cases = TableRegistry::get('Cases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Cases);

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
