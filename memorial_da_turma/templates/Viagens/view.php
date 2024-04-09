<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Viagen $viagen
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Viagen'), ['action' => 'edit', $viagen->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Viagen'), ['action' => 'delete', $viagen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $viagen->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Viagens'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Viagen'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="viagens view content">
            <h3><?= h($viagen->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($viagen->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($viagen->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Feedback') ?></th>
                    <td><?= h($viagen->feedback) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($viagen->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
