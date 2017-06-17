<?php
  $loguser = $this->request->session ()->read ( 'Auth.User' );
?>

<div class="text-justify">

<h2 class="text-center">ESCOVANDO BITS</h2>

  <img src="img/escovandobits_800-min.jpg" alt="">

  <p>
    O Escovando Bits é para você que tem algum projeto, pesquisa ou conhecimento técnico em temas na área de TI e quer <strong>compatilhar</strong> com a comunidade!
    <br>O ENTEC 2017 disponibiliza uma seção para que os participantes possam apresentar seus trabalhos, atividades e curiosidades na área de informática nas seguintes trilhas: Software Livre, Desenvolvimento, Segurança, Robótica, Educação e Inclusão Digital, Mercado e Corporativo.
    <br> Prazo de submissão até 19 de Junho (segunda-feira)
  </p>
  <h5 class="text-center">
    <a href="#" data-toggle="modal" data-target="#modal_escovandobits">
      <span class="fa fa-plus-square"></span> Saiba mais
    </a>
  </h5>
  <div class="modal fade" id="modal_escovandobits" tabindex="-1" role="dialog" aria-labelledby="escovandobits_title">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="escovandobits_title">Escovando Bits</h4>
        </div>
        <div class="modal-body text-justify">
          <h5><strong>OBJETIVO</strong></h5>
          <p>Permitir que os participantes do ENTEC 2017 possam apresentar seus trabalhos, atividades e curiosidades na área de informática nas seguintes trilhas: Software Livre, Desenvolvimento, Segurança, Robótica, Educação e Inclusão Digital, Mercado e Corporativo.</p>

          <h5><strong>FORMATO</strong></h5>
          <p>Os Participantes que tiverem interesse em apresentar seus trabalhos, divulgar alguma tecnologia ou compartilhar conhecimentos e curiosidades poderão submeter suas propostas para o Escovando bits - versão 1.0. As falas terão um tempo de 15 minutos com mais 5 minutos de perguntas. Qualquer Participante inscrito no ENTEC 2017 pode submeter uma ou mais palestras dentro das trilhas do Escovando bits - versão 1.0: Software Livre, Desenvolvimento, Segurança, Robótica, Educação e Inclusão Digital, Mercado e Corporativo.</p>

          <h5><strong>SUBMISSÃO</strong></h5>
          <p>Para submeter uma palestra o Participante do ENTEC 2017, deverá:
           <br>- Estar inscrito no ENTEC 2017;
           <br>- Enviar proposta da palestra através de um <?= $this->Html->link(__('formulário específico.'), ['controller' => 'proposals', 'action' => 'add']) ?>.
           <br>Nas propostas serão definidos: a trilha, um título, palavras chaves e uma descrição de 300 a 500 palavras.</p>

          <h5><strong>CONFIRMAÇÃO DE PALESTRA</strong></h5>
          <p>Caso o número de submissões seja maior do que os slots de palestras (08 palestras), os participantes do ENTEC que decidirão qual palestra será apresentada, as propostas mais votadas pelos Participantes serão as palestras selecionadas. Após contato da organização por e-mail, o palestrante deve confirmar o interesse em realizar a palestra e confirmar o horário alocado.</p>
          <h5><strong>HORÁRIOS</strong></h5>
          <p>O Escovando Bits ocorrerá no turno da tarde do dia 21/06! </p>
          <table cellpadding="2" cellspacing="2">
            <col width="25%"/>
            <col width="75%"/>
              <td bgcolor="#9fc5e8" style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><b><span style="background: #9fc5e8">HORáRIOS</span></b></font></font></font></p>
              </td>
              <td bgcolor="#9fc5e8" style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><b><span style="background: #9fc5e8">ATIVIDADES</span></b></font></font></font></p>
              </td>
            </tr>
            <tr>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">13h20
                - 13h40</span></font></font></font></p>
              </td>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">Palestra
                01</span></font></font></font></p>
              </td>
            </tr>
            <tr>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">13h40
                - 14h00</span></font></font></font></p>
              </td>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">Palestra
                02</span></font></font></font></p>
              </td>
            </tr>
            <tr>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">14h00
                - 14h20</span></font></font></font></p>
              </td>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">Palestra
                03</span></font></font></font></p>
              </td>
            </tr>
            <tr>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">14h20
                - 14h40</span></font></font></font></p>
              </td>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">Palestra
                04</span></font></font></font></p>
              </td>
            </tr>
            <tr>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">14h40
                - 15h00</span></font></font></font></p>
              </td>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">Palestra
                05</span></font></font></font></p>
              </td>
            </tr>
            <tr>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">15h00
                - 15h20</span></font></font></font></p>
              </td>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">Palestra
                06</span></font></font></font></p>
              </td>
            </tr>
            <tr>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">15h20
                - 15h40</span></font></font></font></p>
              </td>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">Palestra
                07</span></font></font></font></p>
              </td>
            </tr>
            <tr>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">15h40
                - 16h00</span></font></font></font></p>
              </td>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">Palestra
                08</span></font></font></font></p>
              </td>
            </tr>
            <tr>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">16h00
                - 16h20</span></font></font></font></p>
              </td>
              <td style="border: 1.00pt solid #000000; padding: 0.05cm">
                <p style="margin: 0px; font-variant: normal; font-style: normal; font-weight: normal; text-decoration: none">
                <font color="#000000"><font face="Ubuntu"><font size="2" style="font-size: 11pt"><span style="background: transparent">Mesa
                final com todos os participantes.</span></font></font></font></p>
              </td>
            </tr>
          </table>
          <h5><strong>CERTIFICADO</strong></h5>
          <p>Os palestrantes receberão um certificado de apresentação de palestra no evento Escovando Bits na forma de subevento do ENTEC 2017.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="row" style="margin-top: 40px;">
    <div class="col-xs-8 col-xs-offset-2">
      <button type="button" class="btn btn-block btn-primary dropdown-toggle" <?= is_null($loguser) ? 'disabled="disabled"' : ''?> data-toggle="dropdown">
        Propostas  <span class="caret"></span>
      </button>
      <?php if (is_null($loguser)): ?>
        <p class="text-small text-center text-danger" disabled>Faça <?=$this->Html->link('login', array('controller' => 'users', 'action'=> 'login'))?> para acessar o sistema de envio de propostas</p>
      <?php else: ?>
        <ul class="dropdown-menu inverse-dropdown" role="menu">
          <li>
            <?php
              echo $this->Html->link ( '<i class="fa fa-upload fa-lg"></i> '.' Enviar um Proposta de Palestra', array (
                  'controller' => 'proposals',
                  'action' => 'add'), array('escape' => false) );
            ?>
          </li>

          <li>
            <?php
              echo $this->Html->link ( '<i class="fa fa-list fa-lg"></i> '.' Listar Meus Envios', array (
                  'controller' => 'proposals',
                  'action' => 'index'), array('escape' => false) );
            ?>
          </li>
        </ul>
      <?php endif ?>
    </div>
  </div>
</div>

