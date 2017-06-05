<?php
/**
  * @var \App\View\AppView $this
  */
?>







<?= $this->assign('title', 'ENTEC 2017 - Cadastrar conta'); ?>
<div class="container section"
    style="width: 70%; padding-top: 89px; margin-bottom: 10px;" id="insc">
    <?= $this->Flash->render()?>
    <h2>Enviar Artigo:</h2>
    <div class="users form">
        <span>Atenção, o arquivo enviado deve seguir o Modelo de Resumo:  <a target="blank" href="https://drive.google.com/file/d/0Bzj6EjHbV7WIRkthWEVqUXR1c0k/view?usp=sharing">.DOCX</a>
        </span>
        <?= $this->Form->create($paper,['type' => 'file', 'class' => 'form-group'])?>
        <legend>Artigo: </legend>
            <?= $this->Form->control('title', array('label' => 'Título completo do artigo', 'class' => 'form-control'))?>

            <?php
                //echo $this->Form->control('files._ids', ['options' => $files]);
            ?>
            <div style="min-width: 180px; width: 35%;">
                <?=  $this->Form->control('arquivo', ['label' => 'Upload do arquivo do artigo','type' => 'file']); ?>
            </div>

        </fieldset>

        <?= $this->Form->button(__('<i class="fa fa-paper-plane-o"></i> ENVIAR'), ['class'=>'form-control', 'escape' => false]); ?>
        <?= $this->Form->end()?>
    </div>
</div>








<div class="papers form large-9 medium-8 columns content">
    <?= $this->Form->create($paper) ?>
    <fieldset>
        <legend><?= __('Add Paper') ?></legend>
        <?php
            
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
