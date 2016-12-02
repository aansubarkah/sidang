<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EvidencesDecisionsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EvidencesDecisionsController Test Case
 */
class EvidencesDecisionsControllerTest extends IntegrationTestCase
{

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
        'app.assemblies',
        'app.causes',
        'app.categories',
        'app.assemblies_causes',
        'app.clients',
        'app.causes_clients',
        'app.users',
        'app.groups',
        'app.assemblies_users',
        'app.programs',
        'app.types',
        'app.evidences_programs',
        'app.administrations'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
