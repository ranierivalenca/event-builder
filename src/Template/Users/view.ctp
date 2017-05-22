<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Registration'), ['controller' => 'Registration', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Registration'), ['controller' => 'Registration', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($user->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($user->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($user->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($user->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bairro') ?></th>
            <td><?= h($user->bairro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logradouro') ?></th>
            <td><?= h($user->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($user->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Complemento') ?></th>
            <td><?= h($user->complemento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instituicao') ?></th>
            <td><?= h($user->instituicao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activation Code') ?></th>
            <td><?= h($user->activation_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nascimento') ?></th>
            <td><?= h($user->nascimento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ativo') ?></th>
            <td><?= $user->ativo ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Credenciado') ?></th>
            <td><?= $user->credenciado ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Imp Certificado') ?></th>
            <td><?= $user->imp_certificado ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rec Certificado') ?></th>
            <td><?= $user->rec_certificado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Role') ?></h4>
        <?= $this->Text->autoParagraph(h($user->role)); ?>
    </div>
    <div class="row">
        <h4><?= __('Sexo') ?></h4>
        <?= $this->Text->autoParagraph(h($user->sexo)); ?>
    </div>
    <div class="row">
        <h4><?= __('Estado') ?></h4>
        <?= $this->Text->autoParagraph(h($user->estado)); ?>
    </div>
    <div class="row">
        <h4><?= __('Instrucao') ?></h4>
        <?= $this->Text->autoParagraph(h($user->instrucao)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Registration') ?></h4>
        <?php if (!empty($user->registration)): ?>
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
            <?php foreach ($user->registration as $registration): ?>
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
