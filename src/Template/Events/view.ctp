<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Registration'), ['controller' => 'Registration', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Registration'), ['controller' => 'Registration', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="events view large-9 medium-8 columns content">
    <h3><?= h($event->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($event->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Theme') ?></th>
            <td><?= h($event->theme) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Initials') ?></th>
            <td><?= h($event->initials) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Route') ?></th>
            <td><?= h($event->route) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edition') ?></th>
            <td><?= h($event->edition) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($event->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cover') ?></th>
            <td><?= $this->Number->format($event->cover) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($event->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($event->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($event->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Registration') ?></h4>
        <?php if (!empty($event->registration)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('Checkin') ?></th>
                <th scope="col"><?= __('Certificate') ?></th>
                <th scope="col"><?= __('Role') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($event->registration as $registration): ?>
            <tr>
                <td><?= h($registration->user_id) ?></td>
                <td><?= h($registration->event_id) ?></td>
                <td><?= h($registration->checkin) ?></td>
                <td><?= h($registration->certificate) ?></td>
                <td><?= h($registration->role) ?></td>
                <td><?= h($registration->created) ?></td>
                <td><?= h($registration->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Registration', 'action' => 'view', $registration->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Registration', 'action' => 'edit', $registration->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Registration', 'action' => 'delete', $registration->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $registration->user_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
