<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proposal'), ['action' => 'edit', $proposal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proposal'), ['action' => 'delete', $proposal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proposal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proposals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proposal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="proposals view large-9 medium-8 columns content">
    <h3><?= h($proposal->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($proposal->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $proposal->has('user') ? $this->Html->link($proposal->user->nome, ['controller' => 'Users', 'action' => 'view', $proposal->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($proposal->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($proposal->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($proposal->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($proposal->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($proposal->description)); ?>
    </div>
</div>
