<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Momento> $momentos
 */
?>
<div class="momentos index content">
    <?= $this->Html->link(__('New Momento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Momentos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('imagem') ?></th>
                    <th><?= $this->Paginator->sort('feedback') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($momentos as $momento): ?>
                <tr>
                    <td><?= $this->Number->format($momento->id) ?></td>
                    <td><?= h($momento->nome) ?></td>
                    <td><?= h($momento->descricao) ?></td>
                    <td><?= h($momento->imagem) ?></td>
                    <td><?= h($momento->feedback) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $momento->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $momento->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $momento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $momento->id)]) ?>
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
