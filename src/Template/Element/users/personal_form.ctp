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

    <?php if ($showEmail === true): ?>
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
    <?php endif ?>
  </div>
</fieldset>