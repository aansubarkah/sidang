<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AdministrationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AdministrationsTable Test Case
 */
class AdministrationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AdministrationsTable
     */
    public $Administrations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.administrations',
        'app.decisions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Administrations') ? [] : ['className' => 'App\Model\Table\AdministrationsTable'];
        $this->Administrations = TableRegistry::get('Administrations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Administrations);

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
