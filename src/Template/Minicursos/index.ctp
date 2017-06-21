<!-- src/Template/Users/credenciamento.ctp -->
<?= $this->assign('title', 'Credenciamento'); ?>
<div class="container" style="padding-top: 115px; margin-bottom: 10px; ">

<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-12 col-md-offset-0 col-lg-12 col-lg-offset-0" style="padding: 0;">
<?= $this->Flash->render()?>
<?= $this->Flash->render('auth') ?>
    <h3><?= __('Atividade') ?></h3>
    
    <?php $loguser = $this->request->session ()->read ( 'Auth.User' ); ?>
    <?php if (strpos('admin', $loguser ['role']) !== false) {?>
    	<?= $this->Html->link('<i class="fa fa-2x fa-fw fa-plus pull-left"> Nova Atividade</i> ' , array ('controller' => 'minicursos', 'action' => 'add' ), array ('class'=>'btn btn-success btn-sm col-xs-3','escape' => false) )?>
    <?php }?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th width="4%"><?= $this->Paginator->sort('id') ?></th>
                <th width="37%"><?= $this->Paginator->sort('titulo') ?></th>
                <th width="27%"><?= $this->Paginator->sort('nome_palestrante') ?></th>
                <th width="6%"><?= $this->Paginator->sort('Total Vagas') ?></th>
                <th width="20%" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($minicursos as $minicurso): ?>
            <tr >
                <td style="font-size: 120%;"><?= $this->Number->format($minicurso->id) ?></td>
                <td style="font-size: 120%;">
                	<?= $this->Html->link(mb_strtoupper($minicurso->titulo, 'UTF-8'), ['action' => 'view', $minicurso->id])?>
                </td>
             	
                <td style="font-size: 120%;"><?= h($minicurso->nome_palestrante) ?></td>
                <td style="font-size: 120%;"><?= $this->Number->format($minicurso->numero_vagas) ?></td>
                <td class="actions">
                
         <?php 
		$loguser = $this->request->session ()->read ( 'Auth.User' );
		if (strpos('admin', $loguser ['role']) !== false) {?>
			<?= $this->Html->link('<i class="fa fa-lg fa-fw fa-pencil-square-o"></i>', ['action' => 'edit', $minicurso->id], array ('class' => 'btn btn-primary','escape' => false))?>
			<?=$this->Form->postLink ('<i class="fa fa-lg fa-fw fa-trash"></i>' , array ('action' => 'delete',$minicurso->id ), array ('class' => 'btn btn-danger' ,'escape' => false,'confirm' => __ ( 'Você tem certeza que deseja remover permanentemente a atividade Nº' . $minicurso->id . ' ?' ) ) );?>
			<?php }?>
            
            <?= $this->Html->link('<i class="fa fa-lg fa-fw fa-search"></i>', ['action' => 'view', $minicurso->id], array ('class' => 'btn btn-success','escape' => false))?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
</div>