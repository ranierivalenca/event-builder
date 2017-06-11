<!-- src/Template/Users/view.ctp -->
<?= $this->assign('title', 'ENTEC 2017 - Visualizar dados de usuário'); ?>
<div class="row" style="margin-bottom: 10px;">
  <div class="col-xs-12 col-md-10 col-md-offset-1 col-xl-8 col-xl-offset-2">
    <?= $this->Flash->render()?>
    <?= $this->Flash->render('auth') ?>

    <?php
    $loguser = $this->request->session ()->read ( 'Auth.User' );
    if (strpos('admin', $loguser ['role']) !== false || $loguser ['id'] === $user->id) {
      echo $this->Html->link(
            '<i class="fa fa-2x fa-fw fa-pencil-square-o"></i>'.' EDITAR DADOS',
            array('controller'=>'Users','action'=>'edit', $user->id),
            array('class'=>'btn btn-primary btn-md', 'escape' => false));
    }
    ?>

    <fieldset>
      <legend>Dados da Inscrição: </legend>
        <b>Nº Inscrição : </b> <?= h($user->id)?>
        <br> <b>Login : </b> <?= h($user->username) ?>
        <br> <b>Data Inscrição : </b> <?= $user->created->format('d/m/Y - H:i:s') ?>
        <br> <b>Modificado em : </b> <?= $user->modified->format('d/m/Y - H:i:s') ?>
    </fieldset>


    <fieldset>
      <legend>Dados pessoais: </legend>
        <b>Nome : </b> <?= h($user->nome) ?>
        <br> <b>Telefone : </b> <?= h($user->telefone) ?>
        <br> <b>Sexo : </b> <?= h($user->sexo) ?>
        <br> <b>Nascimento : </b> <?= h($user->nascimento->format('d/m/Y')) ?>
        <br> <b>e-mail : </b> <?= h($user->email) ?>
    </fieldset>
    <fieldset>
      <legend>Endereço: </legend>
        <b>CEP : </b>
        <?= h($user->cep)?>
        <br> <b>Estado : </b>
        <?= h($user->estado)?>
        <br> <b>Cidade : </b>
        <?= h($user->cidade)?>
        <br> <b>Bairro : </b>
        <?= h($user->bairro)?>
        <br> <b>logradouro : </b>
        <?= h($user->logradouro)?>
        <br> <b>Número : </b>
        <?= h($user->numero)?>
        <br> <b>Complemento : </b>
        <?= h($user->complemento)?>
    </fieldset>
    <fieldset>
      <legend>Dados Profissionais: </legend>
        <b>Instituição : </b>
        <?= h($user->instituicao)?>
        <br> <b>Grau de Instrução : </b>
        <?= h($user->instrucao)?>
    </fieldset>
  </div>

</div>