<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->assign('title', 'ENTEC 2017 - Lista Artigos'); ?>
<div class="row" style="margin-top: 10px; margin-bottom: 10px;" id="insc">
  <div class="col-xs-12 col-md-10 col-md-offset-1 col-xl-8 col-xl-offset-2">
    <?= $this->Flash->render()?>
    <h2 class="text-center">Trabalhos acadêmicos</h2>
    <div class="row">
      <div class="col-xs-6 col-sm-4 col-sm-offset-2">
        <?= $this->Html->link(
          '<i class="fa fa-upload"></i> Adicionar trabalho',
          array('controller' => 'papers', 'action' => 'add'),
          array('class'=>'btn btn-lg btn-primary btn-md btn-block', 'escape' => false));
        ?>
      </div>
      <div class="col-xs-6 col-sm-4">
        <?= $this->Html->link(
          'Voltar',
          array('controller'=>'users','action'=>'view'),
          array('class'=>'btn btn-lg btn-default btn-md btn-block', 'escape' => false));
        ?>
      </div>
    </div>
    <div style="margin-top: 10px;">
      <table cellpadding="0" cellspacing="0">
        <thead>
          <tr>
            <th scope="col" style="width:5%;">ID</th>
            <th scope="col">Título</th>
            <th scope="col" style="width:20%;">Status</th>
            <th scope="col" style="width:20%;">Data Envio</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($papers as $paper): ?>
          <tr>
            <td><?= $this->Number->format($paper->id) ?></td>
            <td><?= h($paper->title) ?></td>
            <td><?= h($paper->status==='pending'?'Pendente de Avaliação':$paper->status) ?></td>
            <td><?= h($paper->created->format('d/m/Y - H:i:s')) ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

</div>
