<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('List {0}', 'Books'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Reservations'), ['controller' => 'Reservations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Reservation'), ['controller' => 'Reservations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', 'Disciplines'), ['controller' => 'Disciplines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', 'Discipline'), ['controller' => 'Disciplines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="books form col-md-10 columns content">
    <?= $this->Form->create($book) ?>
    <fieldset>
        <legend><?= 'Add Book' ?></legend>
        <?php
            echo $this->Form->input('shelf_id');
            echo $this->Form->input('sumario');
            echo $this->Form->input('title');
            echo $this->Form->input('author');
            echo $this->Form->input('editor');
            echo $this->Form->input('pages');
            echo $this->Form->input('quantity');
            echo $this->Form->input('classification');
            echo $this->Form->input('disciplines._ids', [
            'label' => 'Disciplina',
            'options' => $disciplines,
            'multiple' => 'checkbox']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
