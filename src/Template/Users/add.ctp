<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Registration'), ['controller' => 'Registration', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Registration'), ['controller' => 'Registration', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('username');
            echo $this->Form->input('password');
            echo $this->Form->input('role');
            echo $this->Form->input('nome');
            echo $this->Form->input('email');
            echo $this->Form->input('telefone');
            echo $this->Form->input('nascimento');
            echo $this->Form->input('sexo');
            echo $this->Form->input('cep');
            echo $this->Form->input('estado');
            echo $this->Form->input('cidade');
            echo $this->Form->input('bairro');
            echo $this->Form->input('logradouro');
            echo $this->Form->input('numero');
            echo $this->Form->input('complemento');
            echo $this->Form->input('instituicao');
            echo $this->Form->input('instrucao');
            echo $this->Form->input('activation_code');
            echo $this->Form->input('ativo');
            echo $this->Form->input('credenciado');
            echo $this->Form->input('imp_certificado');
            echo $this->Form->input('rec_certificado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
