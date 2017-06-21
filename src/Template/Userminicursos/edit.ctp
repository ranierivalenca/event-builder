<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $userminicurso->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $userminicurso->user_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Userminicursos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Minicursos'), ['controller' => 'Minicursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Minicurso'), ['controller' => 'Minicursos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userminicursos form large-9 medium-8 columns content">
    <?= $this->Form->create($userminicurso) ?>
    <fieldset>
        <legend><?= __('Edit Userminicurso') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
