<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BathroomsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BathroomsTable Test Case
 */
class BathroomsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BathroomsTable
     */
    public $Bathrooms;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Bathrooms',
        'app.Buildings'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Bathrooms') ? [] : ['className' => BathroomsTable::class];
        $this->Bathrooms = TableRegistry::getTableLocator()->get('Bathrooms', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Bathrooms);

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
