<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<head>
    <!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet"/>
</head>
<style>
    .page-link{
        padding:10px;
    }
</style>
<div class="d-flex justify-content-center users index content">
    <h3><?= __('Users') ?></h3>
</div>
<?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
<div class="table-responsive">
    <table class="table align-center mb-0 bg-white">
        <thead class="bg-light">
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('password') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
        <tr>
            <td>
                <span class="badge badge-success rounded-pill d-inline"><?= $this->Number->format($user->id) ?></span>
            </td>
            <td>
                <div class="d-flex align-items-center">
                    <?= @$this->Html->image($user->image, ['style' => 'border-radius:100px; width:45px; height:45px; object-fit:cover;']) ?>
                    <div class="ms-3">
                        <p class="fw-bold mb-1"><?= h($user->username) ?></p>
                    </div>
                </div>
            </td>
            <td>
                <p class="fw-normal mb-1"><?= h($user->email) ?></p>
            </td>
            <td>
                <p class="fw-normal mb-1"><?= h($user->password) ?></p>
            </td>
            <td class="actions">
                <button type="button" class="btn btn-link btn-sm btn-rounded"> <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?> </button>
                <button type="button" class="btn btn-link btn-sm btn-rounded">  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?> </button>
                <button type="button" class="btn btn-link btn-sm btn-rounded">    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </button>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <br><br>
    <div class="d-flex justify-content-center">
        <nav aria-label="...">
            <ul class="d-flex justify-content-center pagination pagination-circle">
                <li class="page-item">
                    <a class="page-link"><?= $this->Paginator->prev('' . __('Anterior')) ?></a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#"><?= $this->Paginator->next(__('Próxima') . '') ?></a>
                </li>
            </ul>
            <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, A mostrar {{current}} registo(s) de {{count}} no total')) ?></p>
        </nav>
    </div>
</div>

