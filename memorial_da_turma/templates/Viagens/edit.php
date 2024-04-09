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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $viagen->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $viagen->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Viagens'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="viagens form content">
            <?= $this->Form->create($viagen) ?>
            <fieldset>
                <legend><?= __('Edit Viagen') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('feedback');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
