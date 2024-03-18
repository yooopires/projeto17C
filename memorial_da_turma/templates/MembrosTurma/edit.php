<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\MembrosTurma $membrosTurma
 * @var string[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $membrosTurma->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $membrosTurma->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Membros Turma'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="membrosTurma form content">
            <?= $this->Form->create($membrosTurma) ?>
            <fieldset>
                <legend><?= __('Edit Membros Turma') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('email');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('user_id', ['options' => $users]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
