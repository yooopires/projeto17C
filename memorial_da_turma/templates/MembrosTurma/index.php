<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\MembrosTurma> $membrosTurma
 */
?>
<div class="membrosTurma index content">
    <?= $this->Html->link(__('New Membros Turma'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Membros Turma') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($membrosTurma as $membrosTurma): ?>
                <tr>
                    <td><?= $this->Number->format($membrosTurma->id) ?></td>
                    <td><?= h($membrosTurma->nome) ?></td>
                    <td><?= h($membrosTurma->email) ?></td>
                    <td><?= h($membrosTurma->numero) ?></td>
                    <td><?= $membrosTurma->has('user') ? $this->Html->link($membrosTurma->user->username, ['controller' => 'Users', 'action' => 'view', $membrosTurma->user->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $membrosTurma->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $membrosTurma->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $membrosTurma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $membrosTurma->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
