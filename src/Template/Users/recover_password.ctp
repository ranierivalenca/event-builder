<!-- src/Template/Users/recover_password.ctp -->
<?= $this->assign('title', 'ENTEC 2017 - Solicitar Recuperação de Senha'); ?>

<div class="container" style="margin-bottom: 40px;" id="insc">
  <?= $this->Flash->render()?>
  <div class="row">
    <div class="form col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6     col-md-offset-3 col-lg-4 col-lg-offset-4">
      <h2><?= __('Recuperação de Senha ') ?></h2>
      <!-- <div class="recovery form"> -->
      <?= $this->Form->create()?>
        <fieldset class="form-group">
          <p>
            <strong>Entre com o seu e-mail para receber um link de recuperação de senha.</strong>
          </p>
            <?=$this->Form->control ( 'email', array ('class' => 'form-control','id' => 'email' ) )?>
          <p class="small">
            O link de recuperação de senha é valido por 48 horas.
          </p>
        <!-- </div> -->
        </fieldset>
        <?= $this->Form->input(__('Enviar'), array('type' => 'submit', 'class'=>'btn btn-block btn-success', 'escape' => false)); ?>
      <?= $this->Form->end()?>
    </div>
  </div>
</div>

