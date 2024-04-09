<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Projeto $projeto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Projeto'), ['action' => 'edit', $projeto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Projeto'), ['action' => 'delete', $projeto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projeto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Projetos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Projeto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projetos view content">
            <h3><?= h($projeto->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($projeto->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($projeto->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imagem') ?></th>
                    <td><?= h($projeto->imagem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Feedback') ?></th>
                    <td><?= h($projeto->feedback) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($projeto->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
