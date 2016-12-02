<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ProgramsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ProgramsController Test Case
 */
class ProgramsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.programs',
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
        'app.decisions',
        'app.administrations',
        'app.evidences',
        'app.evidences_decisions',
        'app.evidences_programs',
        'app.types'
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
