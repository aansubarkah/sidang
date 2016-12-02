<?php
namespace App\Test\TestCase\Controller;

use App\Controller\AssembliesUsersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\AssembliesUsersController Test Case
 */
class AssembliesUsersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.assemblies_users',
        'app.assemblies',
        'app.meetings',
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
        'app.types',
        'app.evidences_programs',
        'app.users',
        'app.groups'
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
