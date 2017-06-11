<!-- src/Template/Users/edit.ctp -->
<?= $this->assign('title', 'ENTEC 2017 - Editar dados de usuário'); ?>

<div class="container" style="margin-bottom: 40px; " id="insc">

  <?= $this->Flash->render()?>
  <div class="row align-items-center">

    <div class="users form-group col-12 col-offset-0 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-xl-8 col-xl-offset-2">
      <h2>Editar inscrição</h2>
      <span>Atenção, os campos marcados com o * asterísco são obrigatórios, os demais opcionais. </span>
      <?= $this->Form->create($user)?>

      <?=$this->element('users/personal_form', ['showEmail' => false])?>
      <?=$this->element('users/address_form')?>
      <?=$this->element('users/professional_form')?>

      <?= $this->Form->button(
        __('ENVIAR'), array(
            'type' => 'submit',
            'class'=>'btn btn-lg btn-block btn-success', 'escape' => false
          )); ?>
      <?= $this->Form->end()?>
    </div>
  </div>
</div>
