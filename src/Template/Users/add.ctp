<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ações') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Usuários'), ['action' => 'index']) ?></li>
   
    </ul>
</nav>
<div class="users form col-md-10 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Cadastrar Usuário') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
