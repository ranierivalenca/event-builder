

<!-- src/Template/Users/add.ctp -->
<?= $this->assign('title', 'Inscrições'); ?>
<div class="container section"
    style="width: 70%; margin-bottom: 10px;" id="insc">
    <?= $this->Flash->render()?>
    <h2>Inscrição:</h2>
    <div class="events form">
        <span>Atenção, os campos marcados com o * asterísco são obrigatórios, os demais opcionais. </span>
        <?= $this->Form->create($event, ['type' => 'file', 'class' => 'form-group'])?>
        <fieldset>
            <legend>Dados do evento: </legend>
            <?= $this->Form->control('name', array('label' => 'Nome Completo do Evento', 'class' => 'form-control'))?>
            <?=  $this->Form->control('theme', array('label' => 'Tema do Evento','class' => 'form-control')); ?>

            <div class="my-form-inline">
                <div style="min-width: 180px; width: 35%;">
                    <?=  $this->Form->control('initials', array('label' => 'Sigla do Evento','class' => 'form-control')); ?>
                </div>
                <div style="min-width: 180px; width: 35%;">
                    <?=  $this->Form->control('route', array('label' => 'Rota de endereço do Evento','class' => 'form-control')); ?>
                </div>
            </div>

            <div class="my-form-inline">
                <div style="min-width: 180px; width: 35%;">
                    <?=  $this->Form->control('edition', array('label' => 'Edição do Evento','class' => 'form-control')); ?>
                </div>
                <div style="min-width: 180px; width: 35%;">
                     <?=  $this->Form->control('cover', ['label' => 'Arquivo Banner de Capa do Evento','type' => 'file']); ?>
                </div>
            </div>


            <?=  $this->Form->control('description', array('label' => 'Descrição do Evento','class' => 'form-control')); ?>






        </fieldset>



        <?= $this->Form->button(__('<i class="fa fa-paper-plane-o"></i> ENVIAR'), ['class'=>'form-control', 'escape' => false]); ?>
        <?= $this->Form->end()?>
    </div>
</div>

