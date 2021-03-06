<!-- src/Template/Users/aviso_validacao.ctp -->
<?= $this->assign('title', 'ENTEC 2017 - Aviso conta pendente de validação'); ?>
<div class="container">
  <?= $this->Flash->render()?>
  <?= $this->Flash->render('auth') ?>

  <div id="register" class="section">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Validação pendente!</h3>
          </div>
          <div class="panel-body">
            <strong>Quase lá, <?=h($nome)?></strong>! A sua inscrição está pendente de validação. Em instantes será enviado um e-mail para <strong><?=h($email)?></strong> com instruções para a validação.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
