<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->assign('title', 'ENTEC 2017 - Cadastrar conta'); ?>
<div class="row" style="margin-top: 10px; margin-bottom: 10px;" id="insc">
  <div class="col-xs-12 col-md-10 col-md-offset-1 col-xl-8 col-xl-offset-2">
    <?= $this->Flash->render()?>
    <h2>Enviar trabalho</h2>
    <div>
      <h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Atenção</h4>
      <ul>
        <li> O arquivo enviado deve seguir o Modelo de Resumo:  <a target="blank" href="https://drive.google.com/file/d/0Bzj6EjHbV7WIRkthWEVqUXR1c0k/view?usp=sharing">.DOCX</a></li>
        <li> Extensões aceitas: .docx e doc</li>
        <li> Tamanho máximo aceito: 1Mb <small>(Por favor, compacte as imagens inseridas para deixar o arquivo menor. As ferramentas de Ms Office eOpenOffice têm funcionalidades para diminuit o tamanho do arquivo. )</small></li>
        <li>Em caso de dúvidas ou dificuldades na submissão entre em contato com <strong>dpex@igarassu.ifpe.edu.br </strong></li>
      </ul>

      <?= $this->Form->create($paper,['type' => 'file', 'class' => 'form-group'])?>

        <?= $this->Form->control('title', array('label' => 'Título completo do artigo', 'class' => 'form-control'))?>

        <?php
          //echo $this->Form->control('files._ids', ['options' => $files]);
        ?>
        <div style="min-width: 180px; width: 35%;">
          <?=  $this->Form->control('arquivo', ['label' => 'Upload do arquivo do artigo','type' => 'file', 'accept' => '.doc , .docx']); ?>
        </div>

      </fieldset>

      <?= $this->Form->button(
        __('ENVIAR'), array(
            'type' => 'submit',
            'class'=>'btn btn-lg btn-block btn-success', 'escape' => false
          )); ?>
      <?= $this->Form->end()?>
      <?= $this->Html->link(
          'Voltar',
          array('controller'=>'papers'),
          array('class'=>'btn btn-sm btn-default btn-md btn-block', 'escape' => false));
        ?>
    </div>
  </div>
</div>






