<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EvidencesProgramsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EvidencesProgramsTable Test Case
 */
class EvidencesProgramsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EvidencesProgramsTable
     */
    public $EvidencesPrograms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.evidences_programs',
        'app.evidences',
        'app.decisions',
        'app.meetings',
        'app.administrations',
        'app.evidences_decisions',
        'app.programs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EvidencesPrograms') ? [] : ['className' => 'App\Model\Table\EvidencesProgramsTable'];
        $this->EvidencesPrograms = TableRegistry::get('EvidencesPrograms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EvidencesPrograms);

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
