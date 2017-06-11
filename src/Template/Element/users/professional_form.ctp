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