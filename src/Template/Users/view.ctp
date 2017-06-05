<!-- src/Template/Users/view.ctp -->
<?= $this->assign('title', 'ENTEC 2017 - Visualizar dados de usuário'); ?>
<div class="container" style="width:80%;padding-top: 115px; margin-bottom: 10px; ">
<?= $this->Flash->render()?>
<?= $this->Flash->render('auth') ?>
<form>

<?php 
$loguser = $this->request->session ()->read ( 'Auth.User' );
if (strpos('admin', $loguser ['role']) !== false || $loguser ['id'] === $user->id) {
    echo $this->Html->link ( '<i class="fa fa-2x fa-fw fa-pencil-square-o"></i>'.' Editar',
        array ('controller' => 'Users', 'action' => 'edit', $user->id), 
        array ('escape' => false) );
}
?>

<fieldset>
    <legend>Dados da Inscrição: </legend>
<b>Nº Inscrição : </b> <?= h($user->id)?>
<br> <b>Login : </b> <?= h($user->username) ?>
<br> <b>Data Inscrição : </b> <?= $user->created ?>
<br> <b>Modificado em : </b> <?= $user->modified ?>    
</fieldset>
    
    
    <fieldset>
        <legend>Dados pessoais: </legend>
        <b>Nome : </b> <?= h($user->nome) ?> 
 
<br> <b>Telefone : </b> <?= h($user->telefone) ?> 
<br> <b>Sexo : </b> <?= h($user->sexo) ?> 
<br> <b>Nascimento : </b> <?= h($user->nascimento) ?> 
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
        <legend>Dados pessoais: </legend>
        <b>Instituição : </b>
<?= h($user->instituicao)?>
<br> <b>Grau de Instrução : </b>
<?= h($user->instrucao)?>
</fieldset>
</form>


</div>