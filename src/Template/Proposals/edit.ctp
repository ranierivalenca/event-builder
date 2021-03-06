<?php
/**
  * @var \App\View\AppView $this
  */
    $loguser = $this->request->session ()->read ( 'Auth.User' );
?>
<?= $this->assign('title', 'ENTEC 2017 - Cadastrar Proposta'); ?>
<div class="container section" style="width: 70%; margin-bottom: 10px;">
    <?= $this->Flash->render()?>
    <h2>Editar Proposta de Palestra para o Escovando Bits:</h2>
    <div class="proposal form">
        <h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Atenção</h4>
        <ul>
            <li> Consulte o Regulamento em:  <a target="blank" href="">REGULAMENTO</a></li>
            <li> Envie a sua proposta com Título e uma Breve Descrição </li>
            <li> A descrição deve apontar qual a trilha: Software Livre, Desenvolvimento, Segurança, Robótica, Educação e Inclusão Digital, Mercado e Corporativo</li>
            <li> Em caso de dúvidas ou dificuldades na submissão entre em contato com <strong>ramon.farias@igarassu.ifpe.edu.br <strong></li>
        </ul>

        <?= $this->Form->create($proposal,['class' => 'form-group'])?>

            <?= $this->Form->control('title', array('label' => 'Título da Palestra', 'class' => 'form-control'))?>
            <?= $this->Form->control('description',['label' => 'Breve Descrição da Palestra 300 - 500 palavras', 'class' => 'form-control']) ?>
        <?php
            if(strpos('owner manager ', $loguser['entecrole']) !== false){
                echo $this->Form->control ('status',
                array ('class' => 'form-control', 'options' => ['pendente' => 'pendente' , 'aceito' => 'aceito', 'rejeitado' => 'rejeitado'] ), ['required' => true]);
            }
        ?>

        </fieldset>

        <?= $this->Form->button(__('<i class="fa fa-paper-plane-o"></i> ENVIAR'), ['class'=>'form-control', 'escape' => false]); ?>
        <?= $this->Form->end()?>
    </div>
</div>

