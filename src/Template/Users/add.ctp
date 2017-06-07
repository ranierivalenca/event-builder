<!-- src/Template/Users/add.ctp -->
<?= $this->assign('title', 'ENTEC 2017 - Cadastrar conta'); ?>

<div class="container" style="padding-top: 50px; margin-bottom: 40px;" id="insc">

  <?= $this->Flash->render()?>
  <div class="row align-items-center">

    <div class="users form-group col-12 col-offset-0 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1 col-xl-8 col-xl-offset-2">
      <h2>Inscrição:</h2>
      <span>Atenção, os campos marcados com o * asterísco são obrigatórios, os demais opcionais. </span>
      <?= $this->Form->create($user)?>
      <fieldset>
        <legend>Dados pessoais</legend>
        <div class="row">
          <div class="col-xs-12">
            <?= $this->Form->control('nome', array('class' => 'form-control'))?>
          </div>

          <div class="col-xs-6">
            <?=$this->Form->control ('sexo',
              array (
                'class' => 'form-control',
                'options' => [
                  '' => 'Selecione',
                  'Feminino' => 'Feminino' ,
                  'Masculino' => 'Masculino'
                ]
              ), ['required' => true])
            ?>
          </div>
          <div class="col-xs-6">
            <?= $this->Form->control('telefone', array('type'=> 'tel', 'class' => 'form-control'))?>
          </div>
          <div class="col-xs-12">
            <?=$this->Form->control ('nascimento',
              array (
                'class' => 'form-control',
                'label' => 'Data de Nascimento: (Dia/Mês/Ano)',
                'dateFormat' => 'DMY',
                'minYear' => date ( 'Y' ) - 90,
                'maxYear' => date ( 'Y' ) - 10,
                'year' => [
                  'class' => 'form-control'
                ],
                'month' => [
                  'class' => 'form-control'
                ],
                'day' => [
                  'class' => 'form-control'
                ],
                'monthNames' => [
                  '01' => 'Janeiro',
                  '02' => 'Fevereiro',
                  '03' => 'Março',
                  '04' => 'Abril',
                  '05' => 'Maio',
                  '06' => 'Junho',
                  '07' => 'Julho',
                  '08' => 'Agosto',
                  '09' => 'Setembro',
                  '10' => 'Outubro',
                  '11' => 'Novembro',
                  '12' => 'Dezembro'
                ]
              )
            )?>
          </div>

          <div class="col-12 col-sm-6">
            <?=$this->Form->control ( 'email', array ('class' => 'form-control','id' => 'email' ) )?>
          </div>

          <div class="col-12 col-sm-6">
            <?=$this->Form->control ( 'confirm_email', array ('label' => 'Confirmar e-mail','class' => 'form-control','id' => 'email' ) )?>
          </div>

          <div class="col-12 col-sm-6">
            <?= $this->Form->control('password', array('label' => 'Senha', 'class' => 'form-control'))?>
          </div>
          <div class="col-12 col-sm-6">
            <?= $this->Form->control('confirm_password',array('label' => 'Confirmar Senha', 'type'  =>  'password','class' => 'form-control'))?>
          </div>
        </div>
      </fieldset>

      <fieldset>
        <legend>Endereço: </legend>

        <div class="row">
          <div class="col-xs-6 col-md-6 col-lg-2">
             <?= $this->Form->control('cep', array('class' => 'form-control'))?>
          </div>
          <div class="col-xs-6 col-md-6 col-lg-4">
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
          <div class="col-xs-6 col-md-6 col-lg-3">
            <?= $this->Form->control('cidade', array('class' => 'form-control'))?>
          </div>
          <div class="col-xs-6 col-md-6 col-lg-3">
            <?= $this->Form->control('bairro', array('class' => 'form-control'))?>
          </div>

          <div class="col-xs-9">
            <?= $this->Form->control('logradouro', array('label' => "Nome da Rua", 'class' => 'form-control'))?>
          </div>
          <div class="col-xs-3">
            <?= $this->Form->control('numero', array('label' => "Número",'class' => 'form-control'))?>
          </div>
          <div class="col-xs-12">
            <?= $this->Form->control('complemento', array('class' => 'form-control'))?>
          </div>
        </div>

      </fieldset>


      <fieldset>
        <legend>Formação e Informações Profissionais: </legend>
        <div class="row">
          <div class="col-xs-5">
            <?=$this->Form->control ( 'instrucao', array ('label' => 'Grau de Instrução: ','options' => [ 'empty' => 'Selecione','Fundamental Incompleto' => 'Fundamental Incompleto' , 'Fundamental Completo' => 'Fundamental Completo' , 'Médio Incompleto' => 'Médio Incompleto' , 'Médio Completo' => 'Médio Completo' , 'Técnico Incompleto' => 'Técnico Incompleto' , 'Técnico Completo' => 'Técnico Completo' , 'Superior Incompleto' => 'Superior Incompleto' , 'Superior Completo' => 'Superior Completo' , 'Mestrado Incompleto' => 'Mestrado Incompleto' , 'Mestrado Completo' => 'Mestrado Completo' , 'Doutorado Incompleto' => 'Doutorado Incompleto' , 'Doutorado Completo' => 'Doutorado Completo' ] ) )?>
          </div>
          <div class="col-xs-7">
            <?= $this->Form->control('instituicao', array('label' => 'Instituição de Ensino ou Empresa: ','class' => 'form-control'))?>
          </div>
        </div>
      </fieldset>

      <?= $this->Form->button(
        __('ENVIAR'), array(
            'type' => 'submit',
            'class'=>'btn btn-lg btn-block btn-success', 'escape' => false
          )); ?>
      <?= $this->Form->end()?>
    </div>
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