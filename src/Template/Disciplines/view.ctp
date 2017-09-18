<nav class="col-lg-2 col-md-3">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href=""><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('Edit {0}', ['Discipline']), ['action' => 'edit', $discipline->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete {0}', ['Discipline']), ['action' => 'delete', $discipline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discipline->id)]) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Disciplines']), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Discipline']), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List {0}', ['Books']), ['controller' => 'Books', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New {0}', ['Book']), ['controller' => 'Books', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="disciplines view col-lg-10 col-md-9">
    <h3><?= h($discipline->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Disciplina</th>
            <td><?= h($discipline->disciplina) ?></td>
        </tr>
        <tr>
            <th>Sigla</th>
            <td><?= h($discipline->sigla) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($discipline->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related {0}', ['Books']) ?></h4>
        <?php if (!empty($discipline->books)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Shelf Id</th>
                <th>Sumario</th>
                <th>Title</th>
                <th>Author</th>
                <th>Editor</th>
                <th>Pages</th>
                <th>Quantity</th>
                <th>Classification</th>
                <th>Created</th>
                <th>Modified</th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($discipline->books as $books): ?>
            <tr>
                <td><?= h($books->id) ?></td>
                <td><?= h($books->shelf_id) ?></td>
                <td><?= h($books->sumario) ?></td>
                <td><?= h($books->title) ?></td>
                <td><?= h($books->author) ?></td>
                <td><?= h($books->editor) ?></td>
                <td><?= h($books->pages) ?></td>
                <td><?= h($books->quantity) ?></td>
                <td><?= h($books->classification) ?></td>
                <td><?= h($books->created) ?></td>
                <td><?= h($books->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Books', 'action' => 'view', $books->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Books', 'action' => 'edit', $books->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Books', 'action' => 'delete', $books->id], ['confirm' => __('Are you sure you want to delete # {0}?', $books->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
