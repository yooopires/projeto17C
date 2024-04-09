<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ViagensTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ViagensTable Test Case
 */
class ViagensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ViagensTable
     */
    protected $Viagens;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Viagens',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Viagens') ? [] : ['className' => ViagensTable::class];
        $this->Viagens = $this->getTableLocator()->get('Viagens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Viagens);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ViagensTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
