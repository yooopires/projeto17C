<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MembrosTurmaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MembrosTurmaTable Test Case
 */
class MembrosTurmaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MembrosTurmaTable
     */
    protected $MembrosTurma;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.MembrosTurma',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('MembrosTurma') ? [] : ['className' => MembrosTurmaTable::class];
        $this->MembrosTurma = $this->getTableLocator()->get('MembrosTurma', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->MembrosTurma);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MembrosTurmaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\MembrosTurmaTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
