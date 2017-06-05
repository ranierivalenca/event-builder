<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paper'), ['action' => 'edit', $paper->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paper'), ['action' => 'delete', $paper->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paper->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Papers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paper'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="papers view large-9 medium-8 columns content">
    <h3><?= h($paper->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $paper->has('user') ? $this->Html->link($paper->user->id, ['controller' => 'Users', 'action' => 'view', $paper->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($paper->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($paper->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($paper->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($paper->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($paper->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Feedback') ?></h4>
        <?= $this->Text->autoParagraph(h($paper->feedback)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Files') ?></h4>
        <?php if (!empty($paper->files)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Path') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($paper->files as $files): ?>
            <tr>
                <td><?= h($files->id) ?></td>
                <td><?= h($files->name) ?></td>
                <td><?= h($files->path) ?></td>
                <td><?= h($files->created) ?></td>
                <td><?= h($files->modified) ?></td>
                <td><?= h($files->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Files', 'action' => 'view', $files->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Files', 'action' => 'edit', $files->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Files', 'action' => 'delete', $files->id], ['confirm' => __('Are you sure you want to delete # {0}?', $files->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
