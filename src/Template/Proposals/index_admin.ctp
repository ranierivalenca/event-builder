<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->assign('title', 'ENTEC 2017 - Cadastrar Proposta'); ?>
<div class="container section" style="width: 70%; margin-bottom: 10px;">
    <?= $this->Flash->render()?>
    <h2>Lista de Propostas:</h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">TÍTULO</th>
                <th scope="col">USUÁRIO</th>
                <th scope="col">STATUS</th>
                <th scope="col">CRIAÇÃO</th>
                <th scope="col">MODIFICAÇÃO</th>
                <th scope="col" class="actions"><?= __('ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proposals as $proposal): ?>
            <tr>
                <td><?= $this->Number->format($proposal->id) ?></td>
                <td><?= h($proposal->title) ?></td>
                <td><?= $proposal->has('user') ? $this->Html->link($proposal->user->nome, ['controller' => 'Users', 'action' => 'view', $proposal->user->id]) : '' ?></td>
                <td><?= h($proposal->status) ?></td>
                <td><?= h($proposal->created) ?></td>
                <td><?= h($proposal->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $proposal->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $proposal->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $proposal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proposal->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>
