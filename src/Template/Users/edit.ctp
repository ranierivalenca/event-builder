<!-- src/Template/Users/add.ctp -->
<?= $this->assign('title', 'ENTEC 2017 - Editar dados de usuário'); ?>
<div class="container section"
    style="width: 70%; margin-bottom: 10px;" id="insc">
    <?= $this->Flash->render()?>
    <h2>Inscrição:</h2>
    <div class="users form">
        <span>Atenção, os campos marcados com o * asterísco são obrigatórios, os demais opcionais. </span>
        <?= $this->Form->create($user,array('class' => 'form-group'))?>
        <fieldset>
            <legend>Dados pessoais: </legend>
            <?= $this->Form->control('nome', array('class' => 'form-control'))?>

            <div class="my-form-inline">
                <div style="min-width: 210px; width: 30%;">
                    <?=$this->Form->control ( 'sexo', array ('options' => [ '' => 'Selecione','Feminino' => 'Feminino' , 'Masculino' => 'Masculino'] ), ['required' => true])?>
                </div>
                <div style="min-width: 280px; width: 40%;">
                    <?=$this->Form->control ( 'nascimento', array ('label' => 'Date de Nascimento: (Dia/Mês/Ano) ','dateFormat' => 'DMY','minYear' => date ( 'Y' ) -90,'maxYear' => date ( 'Y' ) - 10,'class' => 'form-control','monthNames' => [ '01' => 'Janeiro','02' => 'Fevereiro','03' => 'Março','04' => 'Abril','05' => 'Maio','06' => 'Junho','07' => 'Julho','08' => 'Agosto','09' => 'Setembro','10' => 'Outubro','11' => 'Novembro','12' => 'Dezembro' ] ) )?>
                </div>
                <div style="min-width: 210px; width: 30%;">
                    <?= $this->Form->control('telefone', array('class' => 'form-control'))?>
                </div>
            </div>


        </fieldset>

        <fieldset>
            <legend>Endereço: </legend>

            <div class="my-form-inline">
                <div style="min-width: 140px; width: 21%;">
                   <?= $this->Form->control('cep', array('class' => 'form-control'))?>
                </div>
                <div style="min-width: 180px; width: 25%;">
                    <?=
                        $this->Form->control('estado',
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
                    <?= $this->Form->control('cidade', array('class' => 'form-control'))?>
                </div>
                <div style="min-width: 160px; width: 22%;">
                    <?= $this->Form->control('bairro', array('class' => 'form-control'))?>
                </div>
            </div>
            <div class="my-form-inline">
                <div style="width: 350px; width: 65%; max-width: 100%">
                    <?= $this->Form->control('logradouro', array('label' => "Nome da Rua", 'class' => 'form-control'))?>
                </div>
                <div style="min-width: 100px; width: 17%;">
                    <?= $this->Form->control('numero', array('label' => "Número",'class' => 'form-control'))?>
                </div>
                <div style="min-width: 100px; width: 17%;">
                    <?= $this->Form->control('complemento', array('class' => 'form-control'))?>
                </div>
            </div>
        </fieldset>


        <fieldset>
            <legend>Formação e Informações Profissionais: </legend>
            <div class="my-form-inline">
                <div style="min-width: 210px; width: 23%;">
                    <?=$this->Form->control ( 'instrucao', array ('label' => 'Grau de Instrução: ','options' => [ 'empty' => 'Selecione','Fundamental Incompleto' => 'Fundamental Incompleto' , 'Fundamental Completo' => 'Fundamental Completo' , 'Médio Incompleto' => 'Médio Incompleto' , 'Médio Completo' => 'Médio Completo' , 'Técnico Incompleto' => 'Técnico Incompleto' , 'Técnico Completo' => 'Técnico Completo' , 'Superior Incompleto' => 'Superior Incompleto' , 'Superior Completo' => 'Superior Completo' , 'Mestrado Incompleto' => 'Mestrado Incompleto' , 'Mestrado Completo' => 'Mestrado Completo' , 'Doutorado Incompleto' => 'Doutorado Incompleto' , 'Doutorado Completo' => 'Doutorado Completo' ] ) )?>
                </div>
                <div style="min-width: 240px; width: 67%;">
                    <?= $this->Form->control('instituicao', array('label' => 'Instituição de Ensino ou Empresa: ','class' => 'form-control'))?>
                </div>
            </div>
        </fieldset>

        <?= $this->Form->button(__('<i class="fa fa-paper-plane-o"></i> ENVIAR'), ['class'=>'form-control', 'escape' => false]); ?>
        <?= $this->Form->end()?>
    </div>
</div>

<script>
    $('#cep').on('change', function() {
        var cep = $(this).val().replace(/-/g, '')
        if (cep.length == 8) {
            var url = 'https://viacep.com.br/ws/' + cep + '/json';
            $.getJSON(url, function(data) {
                if (!data.erro) {
                    $('#estado').val(data.uf);
                    $('#cidade').val(data.localidade);
                    $('#bairro').val(data.bairro);
                    $('#logradouro').val(data.logradouro);
                }
            });
        }

    });
</script>