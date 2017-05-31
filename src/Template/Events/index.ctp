<div class="container section"
    style="width: 70%; padding-top: 89px; margin-bottom: 10px;" id="insc">
    <?= $this->Flash->render()?>
    <h2>Lista de Eventos</h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('cover') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('theme') ?></th>
                <th scope="col"><?= $this->Paginator->sort('initials') ?></th>
                <th scope="col"><?= $this->Paginator->sort('route') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edition') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
            <tr>
                <td><?= $this->Number->format($event->id) ?></td>
                <td><?= h($event->name) ?></td>
                <td><?= h($event->theme) ?></td>
                <td><?= h($event->initials) ?></td>
                <td><?= h($event->route) ?></td>
                <td><?= h($event->edition) ?></td>
                <td>  <a href="<?= $event->cover->path.$event->cover->name ?>" download> Download</td>
                <td><?= h($event->created) ?></td>
                <td><?= h($event->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>

                    <?=$this->Form->postLink ('<i class="fa   fa-flag-checkered"></i>' , array ('controller'=>'registrations', 'action' => 'register',$event->id ), array ('color:#555;','escape' => false,'confirm' => __ ( 'Registrar ' . $event->name . ' ?' ) ) );?>



                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
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
