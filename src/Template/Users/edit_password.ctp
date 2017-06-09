<!-- src/Template/Users/recover_password.ctp -->
<?= $this->assign('title', 'ENTEC 2017 - Alterar Senha'); ?>
<div class="container section" style="margin-bottom: 40px;" id="insc">
  <div class="row">
        
    <div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
    <?= $this->Flash->render()?>
    <?php if($allowPassChange): ?>
      <h2>Recuperar Senha</h2>
      <div class="recovery form">
        <?= $this->Form->create($user,array('class' => 'form-group'))?>
          <fieldset class="form-group">
          <p>
            <strong>Crie uma nova senha para a sua conta. Insira a nova senha e cofirme-a.</strong>
          </p>
            <div class="my-form-inline">
              <?= $this->Form->control('new_password', array('label' => 'Nova Senha', 'type'  =>  'password', 'class' => 'form-control'))?>
              <?= $this->Form->control('confirm_new_password',array('label' => 'Confirmar Nova Senha', 'type'  =>  'password','class' => 'form-control'))?>
            </div>
          </fieldset>
          <?= $this->Form->button(__('Enviar'), ['class'=>'btn btn-block btn-success', 'escape' => false]); ?>
        <?= $this->Form->end()?>
      </div>
      <?php endif; ?>
    </div>
  </div>

</div>