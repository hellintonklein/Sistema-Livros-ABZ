<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Disciplines'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="disciplines form col-md-10 columns content">
    <?= $this->Form->create($discipline) ?>
    <fieldset>
        <legend><?= 'Add Discipline' ?></legend>
        <?php
            echo $this->Form->input('disciplina');
            echo $this->Form->input('sigla');
            //echo $this->Form->input('books._ids', ['options' => $books]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
