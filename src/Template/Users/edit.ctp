<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Você tem certeza que deseja deletar o usuario # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
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
