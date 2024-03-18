<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MembrosTurma $membrosTurma
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Membros Turma'), ['action' => 'edit', $membrosTurma->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Membros Turma'), ['action' => 'delete', $membrosTurma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $membrosTurma->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Membros Turma'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Membros Turma'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="membrosTurma view content">
            <h3><?= h($membrosTurma->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($membrosTurma->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($membrosTurma->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= h($membrosTurma->numero) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $membrosTurma->has('user') ? $this->Html->link($membrosTurma->user->username, ['controller' => 'Users', 'action' => 'view', $membrosTurma->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($membrosTurma->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
