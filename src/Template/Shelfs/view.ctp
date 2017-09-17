<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Shelf $shelf  */
?>
<head>
   <?php echo $this->Html->css(array('base', 'cake', 'home')); ?>
</head>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="shelfs view large-9 medium-8 columns content">
    <div class="related">
        <h4><?= __('Related Books') ?></h4>
        <?php if (!empty($shelf->books)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Shelf Id') ?></th>
                <th scope="col"><?= __('Sumario') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Author') ?></th>
                <th scope="col"><?= __('Editor') ?></th>
                <th scope="col"><?= __('Pages') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Classification') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($shelf->books as $books): ?>
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
