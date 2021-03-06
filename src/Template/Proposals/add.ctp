<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->assign('title', 'ENTEC 2017 - Cadastrar Proposta'); ?>
<div class="container section" style="width: 70%; margin-bottom: 10px;">
    <?= $this->Flash->render()?>
    <h2>Enviar Proposta de Palestra para o Escovando Bits:</h2>
    <div class="proposal form">
        <h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Atenção</h4>
        <ul>
            <li> Envie a sua proposta com Título e uma Breve Descrição </li>
            <li> A descrição deve apontar qual a trilha: Software Livre, Desenvolvimento, Segurança, Robótica, Educação e Inclusão Digital, Mercado e Corporativo</li>
            <li> Em caso de dúvidas ou dificuldades na submissão entre em contato com <strong>ramon.farias@igarassu.ifpe.edu.br <strong></li>
        </ul>

        <?= $this->Form->create($proposal,['class' => 'form-group'])?>

        <?= $this->Form->control('title', array('label' => 'Título da Palestra', 'class' => 'form-control'))?>
        <?=
        $this->Form->control('trilha',
          array('class' => 'form-control', 'options' => [
            '' => 'Selecione',
            'Software Livre'=>'Software Livre', 
            'Desenvolvimento'=>'Desenvolvimento',
            'Segurança'=>'Segurança', 
            'Robótica'=>'Robótica',
            'Educação e Inclusão Digital'=>'Educação e Inclusão Digital',
            'Mercado'=>'Mercado',
            'Corporativo'=> 'Corporativo'
            
          ]), ['required' => true]
        )
      ?>   
        <?= $this->Form->control('description',['label' => 'Breve Descrição da Palestra 300 - 500 palavras', 'class' => 'form-control']) ?>
        
        

        </fieldset>

        <?= $this->Form->button(__('<i class="fa fa-paper-plane-o"></i> ENVIAR'), ['class'=>'form-control', 'escape' => false]); ?>
        <?= $this->Form->end()?>
    </div>
</div>

