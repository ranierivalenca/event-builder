<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Userminicurso'), ['action' => 'edit', $userminicurso->user_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Userminicurso'), ['action' => 'delete', $userminicurso->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $userminicurso->user_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Userminicursos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userminicurso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Minicursos'), ['controller' => 'Minicursos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Minicurso'), ['controller' => 'Minicursos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="userminicursos view large-9 medium-8 columns content">
    <h3><?= h($userminicurso->user_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $userminicurso->has('user') ? $this->Html->link($userminicurso->user->id, ['controller' => 'Users', 'action' => 'view', $userminicurso->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Minicurso') ?></th>
            <td><?= $userminicurso->has('minicurso') ? $this->Html->link($userminicurso->minicurso->id, ['controller' => 'Minicursos', 'action' => 'view', $userminicurso->minicurso->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($userminicurso->created) ?></td>
        </tr>
    </table>
</div>
