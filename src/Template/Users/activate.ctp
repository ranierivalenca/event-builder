<!-- src/Template/Users/activate.ctp -->
<?= $this->assign('title', 'Ativando Inscrição'); ?>
<h1><?= h($user->nome) ?></h1>

<h1>Usuário Ativado! </h1>
 
 <h1><?= h($user->id) ?></h1>
 
 <h1><?= h($user->activation_code) ?></h1>