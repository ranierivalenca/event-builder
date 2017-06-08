<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->assign('title', 'ENTEC 2017 - Cadastrar conta'); ?>
<div class="container section"
    style="width: 70%; margin-bottom: 10px;" id="insc">
    <?= $this->Flash->render()?>
    <h2>Enviar Artigo:</h2>
    <div class="users form">
        <h4><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Atenção</h4>
        <ul>
            <li> O arquivo enviado deve seguir o Modelo de Resumo:  <a target="blank" href="https://drive.google.com/file/d/0Bzj6EjHbV7WIRkthWEVqUXR1c0k/view?usp=sharing">.DOCX</a></li>
            <li> Extensões aceitas: .docx e doc</li>
            <li> Tamanho máximo aceito: 4Mb <small>(Por favor, compacte as imagens inseridas para deixar o arquivo menor.)</small></li>
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

        <?= $this->Form->button(__('<i class="fa fa-paper-plane-o"></i> ENVIAR'), ['class'=>'form-control', 'escape' => false]); ?>
        <?= $this->Form->end()?>
    </div>
</div>






