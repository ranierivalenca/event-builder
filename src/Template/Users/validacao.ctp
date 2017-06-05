<!-- src/Template/Users/aviso_validacao.ctp -->
<?= $this->assign('title', 'ENTEC 2017 - Aviso conta pendente de validação'); ?>
<div class="container" style="width:80%;padding-top: 115px; margin-bottom: 10px; ">
    <?= $this->Flash->render()?>
    <?= $this->Flash->render('auth') ?>

    <div id="register" class="section">
          <div class="container">
            <div class="row">
              <h2 class="text-center"></h2>
              
              <div class="col-md-8 col-md-offset-2 text-center">

                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Validação pendente!</h3>
                    </div>
                    <div class="panel-body">
                        <?=
                        $user->nome.', estamos quase lá, a sua inscrição está pendente de validação. Em instantes será enviado um e-mail para <b>'.$user->email.'</b> com instruções para a validação. '
                        ?>
                    </div>
                </div>


                   
              </div>
          </div>
      </div>
    </div>    
</div>