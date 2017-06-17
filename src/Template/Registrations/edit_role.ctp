<?= $this->assign('title', 'ENTEC 2017 - Editar dados de usuário'); ?>

<div class="container" style="margin-bottom: 40px; " id="insc">

  <?= $this->Flash->render()?>
  <div class="row align-items-center">

    <div class="users form-group col-12 col-offset-0 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-xl-8 col-xl-offset-2">
      <h2>Editar inscrição</h2>
    <?= $this->Form->create($registration) ?>
    <fieldset>
        <legend><?= __('Editar Papel') ?></legend>
        <?php
            echo $this->Form->control ('role', array ('class' => 'form-control', 'label' => 'Papel', 'options' => ['owner' => 'owner' , 'manager' => 'manager', 'supervisor' => 'supervisor', 'speaker' => 'speaker', 'participant' => 'participant'] ));
        ?>
    </fieldset>
    <?= $this->Form->button(
        __('ENVIAR'), array(
            'type' => 'submit',
            'class'=>'btn btn-lg btn-block btn-success', 'escape' => false
          )); ?>
      <?= $this->Form->end()?>
    </div>
  </div>
</div>

