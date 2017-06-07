<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->assign('title', 'ENTEC 2017 - Lista Artigos'); ?>
<div class="container section"
    style="width: 70%; margin-bottom: 10px;" id="insc">
    <?= $this->Flash->render()?>
    <h2>Lista de Artigos:</h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($papers as $paper): ?>
            <tr>
                <td><?= $this->Number->format($paper->id) ?></td>
                <td><?= $paper->has('user') ? $this->Html->link($paper->user->nome, ['controller' => 'Users', 'action' => 'view', $paper->user->id]) : '' ?></td>
                <td><?= h($paper->title) ?></td>
                <td><?= h($paper->status) ?></td>
                <td><?= h($paper->created) ?></td>
                <td><?= h($paper->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paper->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paper->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paper->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paper->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
