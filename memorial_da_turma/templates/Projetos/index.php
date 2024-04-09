<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Projeto> $projetos
 */
?>
<div class="projetos index content">
    <?= $this->Html->link(__('New Projeto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Projetos') ?></h3>
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
                <?php foreach ($projetos as $projeto): ?>
                <tr>
                    <td><?= $this->Number->format($projeto->id) ?></td>
                    <td><?= h($projeto->nome) ?></td>
                    <td><?= h($projeto->descricao) ?></td>
                    <td><?= h($projeto->imagem) ?></td>
                    <td><?= h($projeto->feedback) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $projeto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $projeto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $projeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projeto->id)]) ?>
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
