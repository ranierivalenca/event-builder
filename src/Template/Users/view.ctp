<!-- src/Template/Users/view.ctp -->
<?= $this->assign('title', 'ENTEC 2017 - Dashboard'); ?>
<div class="row" style="margin-bottom: 10px;">
  <div class="col-xs-12 col-md-10 col-md-offset-1 col-xl-8 col-xl-offset-2">
    <?= $this->Flash->render()?>
    <?= $this->Flash->render('auth') ?>
    <div class="row" class="dashboard-header">
      <div class="col-xs-3">
        <fieldset>
          <div>
            <h3 class="text-center text-danger">Inscrição</h3>
            <h1 class="text-center text-danger"><strong><?=h($user->id)?></strong></h1>
          </div>
        </fieldset>
      </div>
      <div class="col-xs-9">
        <fieldset>
          <div>
            <dl class="dl-horizontal">
              <dt>Login</dt>
              <dd><?= h($user->username) ?></dd>
              <dt>Data Inscrição</dt>
              <dd><?= $user->created->format('d/m/Y - H:i:s') ?></dd>
              <dt>Modificado em</dt>
              <dd><?= $user->modified->format('d/m/Y - H:i:s') ?></dd>
            </dl>
          </div>
        </fieldset>
      </div>
    </div>
    <div class="row dashboard-options">
      <div class="col-xs-6 col-md-4 col-md-offset-2">
        <?=$this->Html->link(
          '<span class="text-primary"><i class="fa fa-2x fa-fw fa-pencil-square-o"></i><br>Dados do usuário</span>',
          array('controller'=>'Users','action'=>'userData'),
          array('class'=>'btn btn-block btn-default btn-lg', 'escape' => false));
        ?>
      </div>
      <div class="col-xs-6 col-md-4">
        <?=$this->Html->link(
          '<span class="text-primary"><i class="fa fa-2x fa-fw fa-book"></i><br>Mostra acadêmica - Submissões</span>',
          array('controller'=>'Papers'),
          array('class'=>'btn btn-block btn-default btn-lg', 'escape' => false));
        ?>
      </div>
    </div>
  </div>
</div>