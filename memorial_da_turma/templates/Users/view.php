<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->username) ?></h3>
            <table>
                <tr>
                    <th><?= __('Username') ?></th>
                    <td><?= h($user->username) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Imagem') ?></th>
                    <td><?= h($user->imagem) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Membros Turma') ?></h4>
                <?php if (!empty($user->membros_turma)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Numero') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->membros_turma as $membrosTurma) : ?>
                        <tr>
                            <td><?= h($membrosTurma->id) ?></td>
                            <td><?= h($membrosTurma->nome) ?></td>
                            <td><?= h($membrosTurma->email) ?></td>
                            <td><?= h($membrosTurma->numero) ?></td>
                            <td><?= h($membrosTurma->user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'MembrosTurma', 'action' => 'view', $membrosTurma->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'MembrosTurma', 'action' => 'edit', $membrosTurma->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'MembrosTurma', 'action' => 'delete', $membrosTurma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $membrosTurma->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
