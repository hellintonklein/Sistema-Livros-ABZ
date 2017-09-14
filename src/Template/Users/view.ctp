<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */
?>
<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar usuario'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Excluir usuario'), ['action' => 'delete', $user->id], ['confirm' => __('Você tem certeza que deseja escluir o usuario # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view col-lg-10 col-md-9">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
</div>
