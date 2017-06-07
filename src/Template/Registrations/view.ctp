<?php
/**
  * @var \App\View\AppView $this
  */
?>




<!-- src/Template/Users/view.ctp -->
<?= $this->assign('title', 'Confirmar Inscri��o'); ?>
<div class="container" style="width:80%;margin-bottom: 10px; ">
<?= $this->Flash->render()?>
<?= $this->Flash->render('auth') ?>


    <h1>Parabéns você esta inscrito no <?= $registration->event->name ?></h1>


</div>


<!--


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Registration'), ['action' => 'edit', $registration->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Registration'), ['action' => 'delete', $registration->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $registration->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Registrations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Registration'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="registrations view large-9 medium-8 columns content">
    <h3><?= h($registration->user_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $registration->has('user') ? $this->Html->link($registration->user->id, ['controller' => 'Users', 'action' => 'view', $registration->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $registration->has('event') ? $this->Html->link($registration->event->name, ['controller' => 'Events', 'action' => 'view', $registration->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($registration->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($registration->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Checkin') ?></th>
            <td><?= $registration->checkin ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Certificate') ?></th>
            <td><?= $registration->certificate ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Role') ?></h4>
        <?= $this->Text->autoParagraph(h($registration->role)); ?>
    </div>
</div>
-->