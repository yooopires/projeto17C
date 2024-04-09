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
            <?= $this->Html->link(__('List Projetos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="projetos form content">
            <?= $this->Form->create($projeto) ?>
            <fieldset>
                <legend><?= __('Add Projeto') ?></legend>
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
