<!-- src/Template/Users/recover_password.ctp -->
<?= $this->assign('title', 'ENTEC 2017 - Solicitar Recuperação de Senha'); ?>
<div class="container section"
    style="width: 70%; padding-top: 89px; margin-bottom: 10px;" id="insc">
    <?= $this->Flash->render()?>
    <h2>Recuperar Senha</h2>
    <div class="alert alert-default" role="alert">
     Entre com o seu e-mail para receber um link de recuperação de senha. O link de recuperação de senha é valido por 48 horas.
    </div>
    <div class="recovery form">
        <?= $this->Form->create()?>        
            <?=$this->Form->control ( 'email', array ('class' => 'form-control','id' => 'email' ) )?>
            <?= $this->Form->button(__('<i class="fa fa-paper-plane-o"></i> ENVIAR'), ['class'=>'form-control', 'escape' => false]); ?>
        <?= $this->Form->end()?>
    </div>
</div>

