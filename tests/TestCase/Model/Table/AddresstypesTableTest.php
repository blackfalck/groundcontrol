<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AddresstypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AddresstypesTable Test Case
 */
class AddresstypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AddresstypesTable
     */
    public $Addresstypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.addresstypes',
        'app.addresses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Addresstypes') ? [] : ['className' => 'App\Model\Table\AddresstypesTable'];
        $this->Addresstypes = TableRegistry::get('Addresstypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Addresstypes);

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
}
