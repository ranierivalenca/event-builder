
<?php
/**
  * @var \App\View\AppView $this
  */
?>



<!-- src/Template/Users/view.ctp -->
<?= $this->assign('title', 'Confirmar Inscri��o'); ?>
<div class="container" style="width:80%;padding-top: 115px; margin-bottom: 10px; ">
<?= $this->Flash->render()?>
<?= $this->Flash->render('auth') ?>


    <h1>Parabéns você esta inscrito no <?= $registration->event->name ?></h1>
    
  
</div>


