<?php
/**
  * @var \App\View\AppView $this
  */
?>
        
<?= $this->assign('title', 'Inscrições'); ?>
<div class="container section"
    style="width: 70%; padding-top: 89px; margin-bottom: 10px;" id="insc">
    <?= $this->Flash->render()?>
    <h2>Listagem de usuários:</h2>

    <?php echo $this->Html->link(
    '<i class="fa fa-file-excel-o fa-2x"> Migrar Participantes ENTEC 2016</i>',
    array('controller'=>'users','action'=>'migrar'),
    array('class'=>'btn btn-default btn-sm col-xs-4', 'escape' => false));?>

    
</div>
