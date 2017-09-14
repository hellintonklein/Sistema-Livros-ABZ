<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ações') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Você tem certeza que deseja deletar o usuario # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form col-md-10 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editar usuario') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
