<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MomentosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MomentosTable Test Case
 */
class MomentosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MomentosTable
     */
    protected $Momentos;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Momentos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Momentos') ? [] : ['className' => MomentosTable::class];
        $this->Momentos = $this->getTableLocator()->get('Momentos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Momentos);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MomentosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
