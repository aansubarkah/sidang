<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MeetingsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MeetingsTable Test Case
 */
class MeetingsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MeetingsTable
     */
    public $Meetings;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.meetings',
        'app.assemblies',
        'app.cases',
        'app.assemblies_cases',
        'app.users',
        'app.assemblies_users',
        'app.causes',
        'app.categories',
        'app.assemblies_causes',
        'app.clients',
        'app.causes_clients',
        'app.decisions',
        'app.administrations',
        'app.evidences',
        'app.evidences_decisions',
        'app.programs',
        'app.evidences_programs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Meetings') ? [] : ['className' => 'App\Model\Table\MeetingsTable'];
        $this->Meetings = TableRegistry::get('Meetings', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Meetings);

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
