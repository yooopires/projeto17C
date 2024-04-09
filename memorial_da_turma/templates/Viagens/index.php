<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Viagen> $viagens
 */
?>
<div class="viagens index content">
    <?= $this->Html->link(__('New Viagen'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Viagens') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('feedback') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($viagens as $viagen): ?>
                <tr>
                    <td><?= $this->Number->format($viagen->id) ?></td>
                    <td><?= h($viagen->nome) ?></td>
                    <td><?= h($viagen->descricao) ?></td>
                    <td><?= h($viagen->feedback) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $viagen->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $viagen->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $viagen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $viagen->id)]) ?>
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
