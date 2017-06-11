<fieldset>
  <legend>Endereço: </legend>

  <div class="row">
    <div class="col-xs-6 col-md-6 col-lg-2">
       <?= $this->Form->control('cep', array('class' => 'form-control'))?>
    </div>
    <div class="col-xs-6 col-md-6 col-lg-4">
      <?=
        $this->Form->control('estado',
          array('class' => 'form-control', 'options' => [
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

<script>
  var estados = {
    'AC' : 'Acre',
    'AL' : 'Alagoas',
    'AP' : 'Amapá',
    'AM' : 'Amazonas',
    'BA' : 'Bahia',
    'CE' : 'Ceará',
    'DF' : 'Distrito Federal',
    'ES' : 'Espírito Santo',
    'GO' : 'Goiás',
    'MA' : 'Maranhão',
    'MT' : 'Mato Grosso',
    'MS' : 'Mato Grosso do Sul',
    'MG' : 'Minas Gerais',
    'PA' : 'Pará',
    'PB' : 'Paraíba',
    'PR' : 'Paraná',
    'PE' : 'Pernambuco',
    'PI' : 'Piauí',
    'RJ' : 'Rio de Janeiro',
    'RN' : 'Rio Grande do Norte',
    'RS' : 'Rio Grande do Sul',
    'RN' : 'Rondônia',
    'RR' : 'Roraima',
    'SC' : 'Santa Catarina',
    'SP' : 'São Paulo',
    'SE' : 'Sergipe',
    'TO' : 'Tocantins'
}

  $('#cep').on('change', function() {
    var cep = $(this).val().replace(/-/g, '')
    if (cep.length == 8) {
      var url = 'https://viacep.com.br/ws/' + cep + '/json';
      $.getJSON(url, function(data) {
        if (!data.erro) {
          console.log(data);
          $('#estado').val(estados[data.uf]);
          $('#cidade').val(data.localidade);
          $('#bairro').val(data.bairro);
          $('#logradouro').val(data.logradouro);
        }
      });
    }

  });
</script>