<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CausesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\CausesController Test Case
 */
class CausesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.causes',
        'app.categories',
        'app.meetings',
        'app.assemblies',
        'app.assemblies_causes',
        'app.users',
        'app.groups',
        'app.assemblies_users',
        'app.decisions',
        'app.administrations',
        'app.evidences',
        'app.evidences_decisions',
        'app.programs',
        'app.types',
        'app.evidences_programs',
        'app.clients',
        'app.causes_clients'
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
