<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Discipline']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Books']), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Book']), ['controller' => 'Books', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="disciplines index col-md-10 columns content">
    <h3>Disciplines</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('disciplina') ?></th>
                <th><?= $this->Paginator->sort('sigla') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($disciplines as $discipline): ?>
            <tr>
                <td><?= $this->Number->format($discipline->id) ?></td>
                <td><?= h($discipline->disciplina) ?></td>
                <td><?= h($discipline->sigla) ?></td>
                <td class="actions" style="white-space:nowrap">
				
				 <?= $this->Html->link(__(''), ['action' => 'view',  $discipline->id],
			            ['class'=>'btn btn-default btn-xs glyphicon glyphicon-search',
						'data-tooltip'=>'tooltip',
						'title'=> 'Visualizar']) ?> 
					
                    <?= $this->Html->link(__(''), ['action' => 'edit', $discipline->id],
						['class'=>'btn btn-primary btn-xs glyphicon glyphicon-edit',
						'data-tooltip'=>'tooltip',
						'title'=> 'Editar']) ?>
                    <?= $this->Form->postLink(__(''), ['action' => 'delete',  $discipline->id], 
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