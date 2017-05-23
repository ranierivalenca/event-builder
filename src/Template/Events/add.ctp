

<!-- src/Template/Users/add.ctp -->
<?= $this->assign('title', 'Inscrições'); ?>
<div class="container section"
    style="width: 70%; padding-top: 89px; margin-bottom: 10px;" id="insc">
    <?= $this->Flash->render()?>
    <h2>Inscrição:</h2>
    <div class="users form">
        <span>Atenção, os campos marcados com o * asterísco são obrigatórios, os demais opcionais. </span>
        <?= $this->Form->create($user,array('class' => 'form-group'))?>
        <fieldset>
            <legend>Dados do evento: </legend>
            <?= $this->Form->input('name', array('class' => 'form-control'))?>

            <?=  $this->Form->input('theme', array('class' => 'form-control')); ?>
            <?=  $this->Form->input('initials', array('class' => 'form-control')); ?>
            <?=  $this->Form->input('route', array('class' => 'form-control')); ?>
            <?=  $this->Form->input('description', array('class' => 'form-control')); ?>
            <?=  $this->Form->input('edition', array('class' => 'form-control')); ?>
            <?=  $this->Form->input('cover', array('class' => 'form-control')); ?>
        </fieldset>

        <fieldset>
            <legend>Endereço: </legend>

            <div class="my-form-inline">
                <div style="min-width: 140px; width: 21%;">
                   <?= $this->Form->input('cep', array('class' => 'form-control'))?>
                </div>
                <div style="min-width: 180px; width: 25%;">
                    <?=
                        $this->Form->input('estado',
                            array( 'options' => [
                                '' => 'Selecione',
                                'Acre'  => 'Acre' ,
                                'Alagoas'  => 'Alagoas',
                                'Amapá'  => 'Amapá' ,
                                'Amazonas'  => 'Amazonas',
                                'Bahia'  => 'Bahia' ,
                                'Ceará'  => 'Ceará' ,
                                'Distrito Federal'  => 'Distrito Federal' ,
                                'Espírito Santo'  => 'Espírito Santo' ,
                                'Goiás'  => 'Goiás' ,
                                'Maranhão'  => 'Maranhão' ,
                                'Mato Grosso'  => 'Mato Grosso' ,
                                'Mato Grosso do Sul'  => 'Mato Grosso do Sul' ,
                                'Minas Gerais'  => 'Minas Gerais' ,
                                'Pará'  => 'Pará' ,
                                'Paraíba'  => 'Paraíba' ,
                                'Paraná'  => 'Paraná' ,
                                'Pernambuco'  => 'Pernambuco' ,
                                'Piauí'  => 'Piauí' ,
                                'Rio de Janeiro'  => 'Rio de Janeiro' ,
                                'Rio Grande do Norte'  => 'Rio Grande do Norte' ,
                                'Rio Grande do Sul'  => 'Rio Grande do Sul' ,
                                'Rondônia'  => 'Rondônia' ,
                                'Roraima'  => 'Roraima' ,
                                'Santa Catarina'  => 'Santa Catarina' ,
                                'São Paulo' => 'São Paulo' ,
                                'Sergipe'  => 'Sergipe' ,
                                'Tocantins'  => 'Tocantins' ,
                            ]), ['required' => true]
                        )
                    ?>
                </div>
                <div style="min-width: 160px; width: 22%;">
                    <?= $this->Form->input('cidade', array('class' => 'form-control'))?>
                </div>
                <div style="min-width: 160px; width: 22%;">
                    <?= $this->Form->input('bairro', array('class' => 'form-control'))?>
                </div>
            </div>
            <div class="my-form-inline">
                <div style="width: 350px; width: 65%; max-width: 100%">
                    <?= $this->Form->input('logradouro', array('label' => "Nome da Rua", 'class' => 'form-control'))?>
                </div>
                <div style="min-width: 100px; width: 17%;">
                    <?= $this->Form->input('numero', array('label' => "Número",'class' => 'form-control'))?>
                </div>
                <div style="min-width: 100px; width: 17%;">
                    <?= $this->Form->input('complemento', array('class' => 'form-control'))?>
                </div>
            </div>
        </fieldset>


        <fieldset>
            <legend>Formação e Informações Profissionais: </legend>
            <div class="my-form-inline">
                <div style="min-width: 210px; width: 23%;">
                    <?=$this->Form->input ( 'instrucao', array ('label' => 'Grau de Instrução: ','options' => [ 'empty' => 'Selecione','Fundamental Incompleto' => 'Fundamental Incompleto' , 'Fundamental Completo' => 'Fundamental Completo' , 'Médio Incompleto' => 'Médio Incompleto' , 'Médio Completo' => 'Médio Completo' , 'Técnico Incompleto' => 'Técnico Incompleto' , 'Técnico Completo' => 'Técnico Completo' , 'Superior Incompleto' => 'Superior Incompleto' , 'Superior Completo' => 'Superior Completo' , 'Mestrado Incompleto' => 'Mestrado Incompleto' , 'Mestrado Completo' => 'Mestrado Completo' , 'Doutorado Incompleto' => 'Doutorado Incompleto' , 'Doutorado Completo' => 'Doutorado Completo' ] ) )?>
                </div>
                <div style="min-width: 240px; width: 67%;">
                    <?= $this->Form->input('instituicao', array('label' => 'Instituição de Ensino ou Empresa: ','class' => 'form-control'))?>
                </div>
            </div>
        </fieldset>

        <?= $this->Form->button(__('<i class="fa fa-paper-plane-o"></i> ENVIAR'), ['class'=>'form-control', 'escape' => false]); ?>
        <?= $this->Form->end()?>
    </div>
</div>










<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="events form large-9 medium-8 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Add Event') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('theme');
            echo $this->Form->input('initials');
            echo $this->Form->input('route');
            echo $this->Form->input('description');
            echo $this->Form->input('edition');
            echo $this->Form->input('cover');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
