<?= $this->assign('title', 'Adicionar Minicursos'); ?>
<div class="container section"
	style="width: 70%; padding-top: 115px; margin-bottom: 10px;">
	
	
		<?= $this->Flash->render()?>
		<div class="minicursos form">
		
	    <?= $this->Form->create($minicurso) ?>
	    <fieldset>
	        <legend><?= __('Criar Minicurso') ?></legend>
	        <?php
	            echo $this->Form->input('titulo');
	            echo $this->Form->input('nome_palestrante');
	            echo $this->Form->input('numero_vagas');
	            echo $this->Form->input('descricao',['label' => 'Descricação: ']);
	        ?>
	    </fieldset>
	    <?= $this->Form->button(__('<i class="fa fa-paper-plane-o"></i> ENVIAR'), ['class'=>'form-control', 'escape' => false]); ?>
	    <?= $this->Form->end() ?>
	</div>
</div>
