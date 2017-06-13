<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->assign('title', 'ENTEC 2017 - Cadastrar Proposta'); ?>
<div class="container section" style="width: 70%; margin-bottom: 10px;">
    <?= $this->Flash->render()?>
    <h2>Enviar Proposta de Palestra para o Escovando Bits:</h2>
    <div class="users form">
        <h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Atenção</h4>
        <ul>
            <li> Consulte o Regulamento em:  <a target="blank" href="">REGULAMENTO</a></li>
            <li> Envie a sua proposta com Título e uma Breve Descrição </li>
            <li> A descrição deve apontar qual a trilha: Software Livre, Desenvolvimento, Segurança, Robótica, Educação e Inclusão Digital, Mercado e Corporativo</li>
            <li> Em caso de dúvidas ou dificuldades na submissão entre em contato com <strong>ramon.farias@igarassu.ifpe.edu.br <strong></li>
        </ul>

        <?= $this->Form->create($proposal,['type' => 'file', 'class' => 'form-group'])?>

            <?= $this->Form->control('title', array('label' => 'Título da Palestra', 'class' => 'form-control'))?>
            <?= $this->Form->control('description',['label' => 'Breve Descrição da Palestra', 'class' => 'form-control']) ?>
            

        </fieldset>

        <?= $this->Form->button(__('<i class="fa fa-paper-plane-o"></i> ENVIAR'), ['class'=>'form-control', 'escape' => false]); ?>
        <?= $this->Form->end()?>
    </div>
</div>

















<div class="proposals form large-9 medium-8 columns content">
    <?= $this->Form->create($proposal) ?>
    <fieldset>
        <legend><?= __('Add Proposal') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
