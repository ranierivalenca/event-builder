<!-- src/Template/Users/recover_password.ctp -->
<?= $this->assign('title', 'ENTEC 2017 - Alterar Senha'); ?>
<div class="container section"
    style="width: 70%; margin-bottom: 10px;" id="insc">
    <div class="users form col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2">


    <?= $this->Flash->render()?>

    <?php if($allowPassChange){?>
        <h2>Recuperar Senha</h2>
        <div class="alert alert-default" role="alert">
          Aqui você poderá criar uma nova senha para a sua conta, insira a nova senha e cofirme-a.
        </div>
        <div class="recovery form">
             <?= $this->Form->create($user,array('class' => 'form-group'))?>

                <div class="my-form-inline">
                    <div style="min-width: 180px; width: 45%;">
                        <?= $this->Form->control('new_password', array('label' => 'Nova Senha', 'type'  =>  'password', 'class' => 'form-control'))?>
                    </div>
                    <div style="min-width: 180px; width: 45%;">
                        <?= $this->Form->control('confirm_new_password',array('label' => 'Confirmar Nova Senha', 'type'  =>  'password','class' => 'form-control'))?>
                    </div>
                </div>


                <?= $this->Form->button(__('<i class="fa fa-paper-plane-o"></i> ENVIAR'), ['class'=>'form-control', 'escape' => false]); ?>
            <?= $this->Form->end()?>
        </div>
        <?php }?>
</div>

</div>