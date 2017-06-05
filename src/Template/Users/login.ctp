<?php $this->assign('title', 'ENTEC 2017 - Login'); ?>

<!-- File: src/Template/Users/login.ctp -->
<div class="container " style="padding-top: 89px; margin-bottom: 10px; ">
<?= $this->Flash->render()?>
<div class="users form col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Por favor, entre com seu e-mail e senha: ') ?></legend>
        <?= $this->Form->control('username',['label' => 'E-mail']) ?>
        <?= $this->Form->control('password',['label' => 'Senha']) ?>
        	<?php echo $this->Html->link(
	    '<i class="fa fa-question-circle" aria-hidden="true"> Esqueci minha senha</i>',
	    array('controller'=>'users','action'=>'recoverPassword'),
	    array('class'=>'well well-sm', 'escape' => false));?>
    </fieldset>
<?= $this->Form->button(__('Entrar')); ?>
<?= $this->Form->end() ?>

	
	
	
</div>
</div>
