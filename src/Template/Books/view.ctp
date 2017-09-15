<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Book']), ['action' => 'edit', $book->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Book']), ['action' => 'delete', $book->id], ['confirm' => __('Are you sure you want to delete # {0}?', $book->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Books']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Book']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Reservations']), ['controller' => 'Reservations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Reservation']), ['controller' => 'Reservations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Disciplines']), ['controller' => 'Disciplines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Discipline']), ['controller' => 'Disciplines', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="books view col-lg-10 col-md-9">
    <h3><?= h($book->title) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Title</th>
            <td><?= h($book->title) ?></td>
        </tr>
        <tr>
            <th>Author</th>
            <td><?= h($book->author) ?></td>
        </tr>
        <tr>
            <th>Editor</th>
            <td><?= h($book->editor) ?></td>
        </tr>
        <tr>
            <th>Classification</th>
            <td><?= h($book->classification) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($book->id) ?></td>
        </tr>
        <tr>
            <th>'Shelf Id</th>
            <td><?= $this->Number->format($book->shelf_id) ?></td>
        </tr>
        <tr>
            <th>'Sumario</th>
            <td><?= $this->Number->format($book->sumario) ?></td>
        </tr>
        <tr>
            <th>'Pages</th>
            <td><?= $this->Number->format($book->pages) ?></td>
        </tr>
        <tr>
            <th>'Quantity</th>
            <td><?= $this->Number->format($book->quantity) ?></td>
        </tr>
        <tr>
            <th>Created</th>
            <td><?= h($book->created) ?></tr>
        </tr>
        <tr>
            <th>Modified</th>
            <td><?= h($book->modified) ?></tr>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Reservations']) ?></h4>
        <?php if (!empty($book->reservations)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>User Id</th>
                <th>Book Id</th>
                <th>Reserved On</th>
                <th>Reserved Until</th>
                <th>Borrowed On</th>
                <th>Borrowed Until</th>
                <th>Returned In</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($book->reservations as $reservations): ?>
            <tr>
                <td><?= h($reservations->id) ?></td>
                <td><?= h($reservations->user_id) ?></td>
                <td><?= h($reservations->book_id) ?></td>
                <td><?= h($reservations->reserved_on) ?></td>
                <td><?= h($reservations->reserved_until) ?></td>
                <td><?= h($reservations->borrowed_on) ?></td>
                <td><?= h($reservations->borrowed_until) ?></td>
                <td><?= h($reservations->returned_in) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Reservations', 'action' => 'view', $reservations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Reservations', 'action' => 'edit', $reservations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reservations', 'action' => 'delete', $reservations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Disciplines']) ?></h4>
        <?php if (!empty($book->disciplines)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Disciplina</th>
                <th>Sigla</th>
                <th>Tipo</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($book->disciplines as $disciplines): ?>
            <tr>
                <td><?= h($disciplines->id) ?></td>
                <td><?= h($disciplines->disciplina) ?></td>
                <td><?= h($disciplines->sigla) ?></td>
                <td><?= h($disciplines->tipo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Disciplines', 'action' => 'view', $disciplines->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Disciplines', 'action' => 'edit', $disciplines->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Disciplines', 'action' => 'delete', $disciplines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disciplines->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
