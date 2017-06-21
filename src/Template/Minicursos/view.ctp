<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar"> -->
<!--     <ul class="side-nav"> -->
<!-- 
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Minicurso'), ['action' => 'edit', $minicurso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Minicurso'), ['action' => 'delete', $minicurso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $minicurso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Minicursos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Minicurso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Userminicursos'), ['controller' => 'Userminicursos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userminicurso'), ['controller' => 'Userminicursos', 'action' => 'add']) ?> </li>
         -->
<!--     </ul> -->
<!-- </nav> -->

<script>
function myFunction(ele) {
    var userid = prompt("Entre com o número de Inscrição");
    if (userid != null) {
    	var minicurso = ele.id;
		console.log("Minicurso ID  "+minicurso);
		console.log("User ID "+userid);
		
			$.get( "../matricularajax/"+userid+"/"+minicurso, function(data) {
				$("#matriculados").load(minicurso+" .related");				
				} );	 
		
	}
}

</script>

<div class="container" style="padding-top: 115px; margin-bottom: 10px; ">
<?= $this->Flash->render()?>
<?= $this->Flash->render('auth') ?>

	<div class="panel-group">
			<div class="panel panel-primary">
				<div class="panel-heading">
	        		<?= 'Titulo: '.$minicurso->titulo?>
	        	</div>
				<div class="panel-title">
					
						<kbd class="col-xs-8 text-left nopadding">
							<i class="fa fa-graduation-cap " > Ministrante: <?= $minicurso->nome_palestrante ?></i>
						</kbd>
						<kbd class="col-xs-4 text-center nopadding">
							<i class="fa fa-users "> Total Vagas: <?= $minicurso->numero_vagas ?></i>
						</kbd>
					<kbd class="col-xs-12 text-left nopadding">
						<i class="fa fa-info " > </i> <?= $minicurso->descricao ?>
					</kbd>	
				</div>
				
		</div>

    
    
    <div id="matriculados">
    <div class="related">
        <h3><?= __('Inscritos') ?><small> <?php echo count($minicurso->userminicursos).' / '.$minicurso->numero_vagas ?></small></h3> 
        <button id="<?= $minicurso->id ?>" onclick="myFunction(this)" class="col-xs-4 btn  <?php echo count($minicurso->userminicursos) >= $minicurso->numero_vagas ? 'btn-danger': 'btn-success '  ?>" ><i class="fa fa-2x fa-fw fa-plus pull-left"> MATRICULAR</i> </button>
        <?php if (!empty($minicurso->userminicursos)): ?>
        <?= $this->Flash->render()?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th width="5%"><?= __('Nº') ?></th>
                <th width="55%"><?= __('Nome') ?></th>
                <th width="15%"><?= __('Horario') ?></th>
                <th width="15%" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($minicurso->userminicursos as $userminicursos): ?>
            <tr>
                <td><?= h($userminicursos->user_id) ?></td>
                <td><?= h($userminicursos->user['nome']) ?></td>

                <td><?= h($userminicursos->created) ?></td>
                <td class="actions">
                    <?=$this->Form->postLink ('<i class="fa fa-lg fa-fw fa-trash"></i>' , array ('controller' => 'Userminicursos','action' => 'delete',$userminicursos->user_id, $userminicursos->minicurso_id  ), array ('class' => 'btn btn-danger' ,'escape' => false,'confirm' => __ ( 'Você tem certeza que deseja desmatricular ' . $userminicursos->user['nome'] . ' ?' ) ) );?>
				</td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    </div>
</div>
</div>	4