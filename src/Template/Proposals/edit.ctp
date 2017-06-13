<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $proposal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $proposal->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Proposals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="proposals form large-9 medium-8 columns content">
    <?= $this->Form->create($proposal) ?>
    <fieldset>
        <legend><?= __('Edit Proposal') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('description');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
