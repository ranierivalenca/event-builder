<div class="registrations index large-9 medium-8 columns content">
    <h3><?= __('Registrations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('checkin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('certificate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registrations as $registration): ?>
            <tr>
                <td><?= $registration->has('user') ? $this->Html->link($registration->user->nome, ['controller' => 'Users', 'action' => 'view', $registration->user->id]) : '' ?></td>
                <td><?= $registration->has('event') ? $this->Html->link($registration->event->name, ['controller' => 'Events', 'action' => 'view', $registration->event->id]) : '' ?></td>
                <td><?= h($registration->checkin) ?></td>
                <td><?= h($registration->certificate) ?></td>
                <td><?= h($registration->created) ?></td>
                <td><?= h($registration->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $registration->user_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registration->user_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registration->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $registration->user_id)]) ?>
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
