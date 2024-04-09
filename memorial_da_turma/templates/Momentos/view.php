<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Momento $momento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Momento'), ['action' => 'edit', $momento->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Momento'), ['action' => 'delete', $momento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $momento->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Momentos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Momento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="momentos view content">
            <h3><?= h($momento->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($momento->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($momento->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imagem') ?></th>
                    <td><?= h($momento->imagem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Feedback') ?></th>
                    <td><?= h($momento->feedback) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($momento->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
