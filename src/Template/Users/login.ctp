<!-- File: src/Template/Users/login.ctp -->
<div class="container " style="padding-top: 89px; margin-bottom: 10px; ">
<?= $this->Flash->render()?>
<div class="users form col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Por favor, entre com seu e-mail e senha: ') ?></legend>
        <?= $this->Form->input('username',['label' => 'E-mail']) ?>
        <?= $this->Form->input('password',['label' => 'Senha']) ?>
    </fieldset>
<?= $this->Form->button(__('Entrar')); ?>
<?= $this->Form->end() ?>
</div>
</div>