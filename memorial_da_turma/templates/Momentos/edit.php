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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $momento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $momento->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Momentos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="momentos form content">
            <?= $this->Form->create($momento) ?>
            <fieldset>
                <legend><?= __('Edit Momento') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('imagem');
                    echo $this->Form->control('feedback');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
