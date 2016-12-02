<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EvidencesDecisionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EvidencesDecisionsTable Test Case
 */
class EvidencesDecisionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EvidencesDecisionsTable
     */
    public $EvidencesDecisions;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.evidences_decisions',
        'app.evidences',
        'app.decisions',
        'app.meetings',
        'app.administrations',
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
        $config = TableRegistry::exists('EvidencesDecisions') ? [] : ['className' => 'App\Model\Table\EvidencesDecisionsTable'];
        $this->EvidencesDecisions = TableRegistry::get('EvidencesDecisions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EvidencesDecisions);

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
