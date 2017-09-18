<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Book']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Reservations']), ['controller' => 'Reservations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Reservation']), ['controller' => 'Reservations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Disciplines']), ['controller' => 'Disciplines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Discipline']), ['controller' => 'Disciplines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="books index col-md-10 columns content">
    <h3>Books</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('shelf_id') ?></th>
                <th><?= $this->Paginator->sort('sumario') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('author') ?></th>
                <th><?= $this->Paginator->sort('editor') ?></th>
                <th><?= $this->Paginator->sort('pages') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $book): ?>
            <tr>
                <td><?= $this->Number->format($book->id) ?></td>
                <td><?= $this->Number->format($book->shelf_id) ?></td>
                <td><?= $this->Number->format($book->sumario) ?></td>
                <td><?= h($book->title) ?></td>
                <td><?= h($book->author) ?></td>
                <td><?= h($book->editor) ?></td>
                <td><?= $this->Number->format($book->pages) ?></td>
                <td class="actions" style="white-space:nowrap">
				
				 <?= $this->Html->link(__(''), ['action' => 'view',  $book->id],
			            ['class'=>'btn btn-default btn-xs glyphicon glyphicon-search',
						'data-tooltip'=>'tooltip',
						'title'=> 'Visualizar']) ?> 
					
                    <?= $this->Html->link(__(''), ['action' => 'edit', $book->id],
						['class'=>'btn btn-primary btn-xs glyphicon glyphicon-edit',
						'data-tooltip'=>'tooltip',
						'title'=> 'Editar']) ?>
                    <?= $this->Form->postLink(__(''), ['action' => 'delete',  $book->id], 
						['confirm' => 'Confirma a exclusão', 'class'=>'btn btn-danger btn-xs glyphicon glyphicon-remove', 
						'data-tooltip'=>'tooltip',
						'title'=> 'Excluir']) ?>
				
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
         {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>