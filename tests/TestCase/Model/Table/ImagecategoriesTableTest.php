<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImagecategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImagecategoriesTable Test Case
 */
class ImagecategoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImagecategoriesTable
     */
    public $Imagecategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.imagecategories',
        'app.images'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Imagecategories') ? [] : ['className' => 'App\Model\Table\ImagecategoriesTable'];
        $this->Imagecategories = TableRegistry::get('Imagecategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Imagecategories);

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
