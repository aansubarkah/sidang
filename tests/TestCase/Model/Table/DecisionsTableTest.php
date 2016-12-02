<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DecisionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DecisionsTable Test Case
 */
class DecisionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DecisionsTable
     */
    public $Decisions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.decisions',
        'app.meetings',
        'app.administrations',
        'app.evidences',
        'app.evidences_decisions'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Decisions') ? [] : ['className' => 'App\Model\Table\DecisionsTable'];
        $this->Decisions = TableRegistry::get('Decisions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Decisions);

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
