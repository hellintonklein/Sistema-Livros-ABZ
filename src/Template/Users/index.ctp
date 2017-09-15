<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
  */
?>
<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Ações') ?></a></li>
        <li><?= $this->Html->link(__('Novo {0}', ['Usuário']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar {0}', ['Usuários']), ['controller' => 'users', 'action' => 'index']) ?></li>
 
    </ul>
</nav>

<div class="users index col-md-10 columns content">
    <h3><?= __('Usuários') ?></h3>
    <table class="table table-striped table-hover" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name', ['label'=>'Nome']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('email', ['label'=>'Email']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone', ['label'=>'Telefone']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('username', ['label'=>'Usuário']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', ['label'=>'Criação']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified', ['label'=>'Modificação']) ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->name) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->phone) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__(''), ['action' => 'view', $user->id],
			            ['class'=>'btn btn-default btn-xs glyphicon glyphicon-search',
						'data-tooltip'=>'tooltip',
						'title'=> 'Visualizar']) ?> 
					
                    <?= $this->Html->link(__(''), ['action' => 'edit', $user->id],
						['class'=>'btn btn-primary btn-xs glyphicon glyphicon-edit',
						'data-tooltip'=>'tooltip',
						'title'=> 'Editar']) ?>
                    <?= $this->Form->postLink(__(''), ['action' => 'delete', $user->id], 
						['confirm' => 'Confirma a exclusão', 'class'=>'btn btn-danger btn-xs glyphicon glyphicon-remove', 
						'data-tooltip'=>'tooltip',
						'title'=> 'Excluir']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('proximo') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} registros saida de {{count}} total')]) ?></p>
    </div>
</div>
</div>