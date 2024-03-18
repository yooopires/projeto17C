<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MembrosTurmaFixture
 */
class MembrosTurmaFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'membros_turma';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'numero' => 'Lorem i',
                'user_id' => 1,
            ],
        ];
        parent::init();
    }
}
