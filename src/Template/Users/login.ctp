<?php $this->assign('title', 'ENTEC 2017 - Login'); ?>

<!-- File: src/Template/Users/login.ctp -->
<div class="container">
  <?= $this->Flash->render()?>
  <div class="row" style="margin-bottom: 10px;">
    <div class="users col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
      <?= $this->Flash->render('auth') ?>

      <?= $this->Form->create(null, array('class'=>"form-group")) ?>
        <h2>Login</h2>
        <fieldset>
          <p>
            <strong><?= __('Por favor, entre com seu e-mail e senha: ') ?></strong>
          </p>
          <?= $this->Form->control('username',['label' => 'E-mail', 'class' => 'form-control']) ?>
          <?= $this->Form->control('password',['label' => 'Senha', 'class' => 'form-control']) ?>
          <?php echo $this->Html->link(
            '<i class="fa fa-question-circle" aria-hidden="true"></i> Esqueci minha senha',
            array('controller'=>'users','action'=>'recoverPassword'),
            array('class'=>'right', 'escape' => false));
          ?>
        </fieldset>
        <?= $this->Form->button(__('Entrar'), array('type' => 'submit', 'class' => 'btn btn-block btn-success btn-lg')); ?>
      <?= $this->Form->end() ?>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
      <?= $this->Html->link(
        'Criar uma conta',
        array('controller'=>'users','action'=>'add'),
        array('class'=>'btn btn-warning btn-block', 'escape' => false));
      ?>
    </div>
  </div>
</div>
