<!-- src/Template/Users/credenciamento.ctp -->
<?= $this->Html->script('checkin.js'); ?>
<?= $this->assign('title', 'Credenciamento'); ?>




<div class="container" style="padding-top: 89px; margin-bottom: 10px; ">


<?= $this->Flash->render()?>
<?= $this->Flash->render('auth') ?>

<h2 >Inscritos <small> Total válidas: <?= $count ?> </small> <small id='info_insc'> <span id='info_cred'>Credenciados: <?= $count_in ?></span></small></h2> 
<div class="col-xs-12 col-xs-offset-0 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1" style="padding: 0;">
<div id='ajax_loader' style="text-aling:center; position: fixed; left: 0; top: 0; display: none; z-index:100;background:black;opacity:.5;filter:alpha(opacity=75);width:100%;height:100%;">
    
</div>

		<div style="width: 100%; text-align: center; ">
			<div style="width: 31%;float: left;"><i class="fa fa-fw fa-check"> </i><br>Email validado</div>
			<div style="width: 31%;float: left;"><i class="fa fa-fw fa-flag-checkered"> </i><br>Credenciado</div>
			<div style="width: 31%;float: left;"><i class="fa fa-fw fa-print"> </i><br>Imprimir certificado</div>
		</div>
	<table id='userstable' style="width: 100%;"> 
			<col style="width: 7% ;"/>
			<col style="width: 46% ;"/>
			<col style="width: 15% ;"/>
			<col style="width: 15% ;"/>
			<col style="width: 15% ;"/>
	<tr>
			<th ><?= $this->Paginator->sort('id',['label' => 'nº']) ?></th>
			<th ><?= $this->Paginator->sort('nome',['label' => 'Nome']) ?></th>
			<th style="text-align:center;">Status</th>
			<th style="text-align:center;"><?= $this->Paginator->sort('checkin',['label' => 'Creden.']) ?></th>
	</tr>

    
    <tbody style="width: 100%;" id="tablebody">
    <?php foreach ($registrations as $registration): ?>
    <tr style="border: 1px solid #ddd;" class="linha">
		<td style="font-size: 120%;" ><?= $registration->user->id ?></td>
		<td>
            <?= $this->Html->link($registration->user->nome, ['controller'=>'users' ,'action' => 'edit', $registration->user->id],['style'=>'font-size: 120%;'])?>
        </td>
        
        <td style="text-align:center;">
        	<i class="fa fa-3x fa-check" style="color:<?php echo $registration->user->ativo ? '#337ab7' : '#777'; ?>"></i>
        	 
       </td>
        <td style="text-align:center;" id ='<?php echo $registration->user->id.'_td_cred'?>'>
        	<a name='<?php echo $registration->user->nome?>' id ='<?php echo $registration->user->id.'_cred'?>' class='<?php echo $registration->checkin ? "credclass btn btn-success":"credclass btn btn-default";?>' > <i class="fa fa-3x fa-flag-checkered"></i></a>
        
       </td>
        
	</tr>
    <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>

