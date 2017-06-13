<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->assign('title', 'ENTEC 2017 - Cadastrar Proposta'); ?>
<div class="container section" style="width: 70%; margin-bottom: 10px;">
    <?= $this->Flash->render()?>
    <h2>Minha Lista de Propostas:</h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col" style="width:5%;">ID</th>
                <th scope="col" >TÍTULO</th>
                <th scope="col" style="width:20%;">TRILHA</th>
                <th scope="col" style="width:8%;">STATUS</th>
                <th scope="col" style="width:18%;">DATA ENVIO</th>
                <th scope="col" class="actions" style="width:15%;"><?= __('ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proposals as $proposal): ?>
            <tr>
                <td><?= $this->Number->format($proposal->id) ?></td>
                <td><?= h($proposal->title) ?></td>
                <td><?= h($proposal->trilha) ?></td>
                <td><?= h($proposal->status) ?></td>
                <td><?= h($proposal->created->format('d/m/Y - H:i:s')) ?></td>
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
