<?php
  $loguser = $this->request->session ()->read ( 'Auth.User' );
?>

        <h2 class="text-center">Mostra de Trabalho de Pesquisa e Extensão em Tecnologia</h2>
        <p>
          A <strong>Mostra de Trabalho de Pesquisa e Extensão em Tecnologia</strong> no ENTEC oferece aos professores, técnicos e alunos da área de TI a oportunidade de divulgar os seus projetos, receber feedback e realizar networking entre pesquisadores e extensionistas da área de TI.
        </p>

        <p>
          A submissão de trabalhos deve ser feita através de um resumo contendo duas páginas sobre o projeto. Os projetos selecionados pela comissão acadêmica farão uma apresentação oral sobre o projeto com <strong>10 minutos</strong> de duração e <strong>5 minutos</strong> para perguntas.
        </p>


        <div class="btn-group-justified" role="group" aria-label="Toolbar with button groups">
	        <div class="btn-group" role="group">
		        <button type="button" class="btn  btn-success col-lg-6" href="#" data-toggle="modal" data-target="#modal_resultadomostra">
		           RESULTADOS
		        </button>
	        </div>
        	<div class="btn-group" role="group">
		        <button type="button" class="btn btn-primary col-lg-6" href="#" data-toggle="modal" data-target="#modal_programacaomostra">
		           PROGRAMAÇÃO
		        </button>
	        </div>
		    
	     </div> 
        <blockquote>
          <ul>
            <li>Modelo de Resumo:
              <a target="blank" href="https://drive.google.com/file/d/0Bzj6EjHbV7WIRkthWEVqUXR1c0k/view?usp=sharing">.DOCX</a>
            </li>
            <li>Modelo de Apresentação:
              <a target="blank" href="https://drive.google.com/file/d/0Bzj6EjHbV7WIQXJyNi1zTlJ1TDg/view?usp=sharing">.PPTX</a>
            </li>
          </ul>

          <p>
            Datas Importantes

            <ul>
              <li><strong>16 de Junho</strong> - Fim do prazo para entrega dos resumos</li>
              <li><strong>18 de Junho</strong> - Divulgação dos trabalhos aceitos</li>
              <li><strong>21 e 22 de Junho</strong> - Apresentação oral dos artigos</li>
              <li><strong>30 de junho</strong> - Fim do prazo para entrega da versão final dos resumos (a ser publicada nos anais do evento).</li>
              <li><strong>31 de Julho</strong> - Lançamento dos Anais no site do ENTEC.</li>
            </ul>
          </p>
        </blockquote>

        <br>
        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-8  col-sm-offset-2 col-xs-8 col-xs-offset-2">
            <button type="button" class="btn btn-block btn-primary dropdown-toggle" <?= is_null($loguser) ? 'disabled="disabled"' : ''?> data-toggle="dropdown">
              Submissões  <span class="caret"></span>
            </button>
            <?php if (is_null($loguser)): ?>
              <p class="text-small text-center text-danger" disabled>Faça <?=$this->Html->link('login', array('controller' => 'users', 'action'=> 'login'))?> para acessar o sistema de submissão</p>
            <?php else: ?>
              <ul class="dropdown-menu inverse-dropdown" role="menu">
                <li>
                  <?php
                    echo $this->Html->link ( '<i class="fa fa-upload fa-lg"></i> '.' Enviar Artigo - (até 16/06)', array (
                        'controller' => 'papers',
                        'action' => 'add'), array('escape' => false, 'onclick' => 'return false') );
                  ?>
                </li>

                <li>
                  <?php
                    echo $this->Html->link ( '<i class="fa fa-list fa-lg"></i> '.' Listar Meus Envios', array (
                        'controller' => 'papers',
                        'action' => 'index'), array('escape' => false) );
                  ?>
                </li>
              </ul>
            <?php endif ?>
          </div>
        </div>






<div class="modal fade" id="modal_resultadomostra" tabindex="-1" role="dialog" aria-labelledby="resultadomostra_title">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center" id="resultadomostra_title">RESULTADOS MOSTRA ACADÊMICA</h4>
        </div>
        <div class="modal-body text-justify">


			<h4><strong> Artigos Aceitos para Publicação e Apresentação Oral </strong></h4>
			<ul style="font-size:small;" >
				<li>MAPA E JOGO DA MEMÓRIA DO PATRIMÔNIO DE IGARASSU</li>
				<li>IOT EDUCACIONAL: ANÁLISE DE FERRAMENTAS MULTIMÍDIAS NO RASPBERRY PI APLICADAS NO CONTEXTO DO ENSINOAPRENDIZAGEM</li>
				<li>SISTEMA PARA AUXILIAR DEFICIENTES VISUAIS BASEADO EM DETECÇÃO FACIAL</li>
				<li>PROPOSTA DE APLICATIVO MOBILE PARA AUXÍLIO AOS AGENTES DE COMBATE A ENDEMIAS</li>
				<li>APLICATIVO SERTÃO SEM AEDES:PROPOSTA MOBILE COLABORATIVA NA PREVENÇÃO DO AEDES AEGYPTI</li>
				<li>CONTROLE DE ROBÔGUIA PARA DEFICIENTES VISUAIS</li>
				<li>ALÔ CIDADÃO PROPOSTA DE OUVIDORIA MOBILE OPEN SOURCE</li>
				<li>DESENVOLVIMENTO DE UM SISTEMA DE INFORMAÇÃO GEOGRÁFICA PARA O MONITORAMENTO DAS OVITRAMPAS INSTALADAS NO CEMITÉRIO DA VÁRZEA</li>
				<li>SISTEMA DE INFORMAÇÕES GEOGRÁFICAS EM AMBIENTE WEB E MOBILE PARA COMPARTILHAMENTO DE DADOS DO PROJETO ÁGUAS DE AREIAS</li>
				<li>PROGRAMA CISCO NETWORKING ACADEMYIFPE</li>
				<li>SISTEMA DE DETECÇÃO DE INTRUSOS EM AMBIENTE ESCOLAR</li>
				<li>A GESI E A SUSTENTABILIDADE DA CADEIA GLOBAL DE SUPRIMENTOS DAS TIC</li>
				<li>AVALIAÇÃO DA QUALIDADE DOS SERVIÇOS PRESTADOS PELOS PROVEDORES DE ACESSO À INTERNET NA CIDADE DE FLORESTA</li>
				<li>UMA ANÁLISE DE DUAS SOLUÇÕES PARA CONNTRUÇÃO DE REDES VIRTUAIS PRIVADAS</li>
				<li>UMA APLICAÇÃO PARA CONTROLE DE ACESSO EM REDES DEFINIDAS POR SOFTWARE BASEADA EM ENDEREÇOS MAC</li>
				<li>APLICAÇÃO DE MODELOS DE REPUTAÇÃO DE AUTORES PARA ESTIMATIVA DA RELEVÂNCIA OPINIÕES NO DOMÍNIO DE JOGOS ELETRÔNICOS</li>
				<li>JOGO DO MILHÃO: PREVENDO A VENDA DE JOGOS ELETRÔNICOS</li>
				<li>ESTUDOS E DESENVOLVIMENTO TECNOLÓGICO NA IMPLANTAÇÃO DO SISTEMA TELEMÉTRICO RAILBEE PARA MONITORAMENTO ESTRATÉGICO DOS TRENS DO METRÔ DO RECIFE</li>
				<li>ESTRUTURAÇÃO DE LABORATÓRIOS DE INFORMÁTICA NAS ESCOLAS PÚBLICAS MUNICIPAIS DE PALMARESPE</li>
				<li>PROJETO MECÂNICO E INSTRUMENTAÇÃO DE PROTÓTIPO ROBÓTICO PARALELO TIPO DELTA PARA APLICAÇÃO DIDÁTICA</li>
				<li>HTTP/2</li>
				<li>DESENVOLVIMENTO DE UM SISTEMA DE INFORMAÇÃO GEOGRÁFICA PARA GESTÃO DE RESÍDUOS DA CONSTRUÇÃO CIVIL</li>
				<li>CISCO NETRIDERS: A COMPETIÇÃO DE HABILIDADES EM T.I.C. DA CISCO NETWORKING ACADEMY</li>
				<li>DESENVOLVIMENTO DE DRONE QUADRICÓPTERO PARA PULVERIZAÇÃO DE PRODUTOS QUÍMICOS EM PLANTAÇÕES: IMPLEMENTAÇÃO DA ESTRATÉGIA DE CONTROLE EM SISTEMA EMBARCADO.</li>
				<li>MAPA E JOGO DA MEMÓRIA DO PATRIMÔNIO DE IGARASSU</li>
				<li>MATRACA WEB, UM SAAS PARA INCLUSÃO DE DEFICIENTES VISUAIS NO ÂMBITO TECNOLÓGICO</li>
				<li>DESCOBRINDO E CONSTRUINDO TALENTOS PARA COMPUTAÇÃO</li>
				<li>ÓCULOS SENSORIAIS PARA DEFICIENTES VISUAIS</li>
				<li>DESENVOLVIMENTO DE SISTEMA WEB PARA OTIMIZAÇÃO DO CADASTRO DE DENÚNCIAS E PROCESSOS DA VIGILÂNCIA SANITÁRIA DO MUNICÍPIO DE DE CAMARAGIBE-PE</li>
				<li>GAMIFICAÇÃO E TECNOLOGIA NO ENSINO DE LÍNGUAS ESTRANGEIRAS</li>
				<li>OFERTA DE CURSOS DE EXTENSÃO MODALIDADE A DISTÂNCIA COMO ESTRATÉGIA PARA OTIMIZAÇÃO DE PROCESSOS DE ARQUIVAMENTO DO DEPARTAMENTO DE VIGILÂNCIA SANITÁRIA, CAMARAGIBE/PE, 2017.</li>
			</ul>

			​​
			<h4><strong> Artigos Aceitos Apenas para Publicação nos Anais do Evento </strong> </h4>
			<ul style="font-size:small;" >
				<li> AVALIAÇÃO DE EFICIÊNCIA ATRAVÉS DE REGRESSÃO LINEAR E UTILIZAÇÃO DO ALGORITMO KMEANS PARA AGRUPAR SISTEMAS BRT’S POSSIBILITANDO BENCHMARKING</li>
				<li> MOCCA – MODELO DE CADEIRA DE CONDUTÓRIA AUTOMATIZADA</li>
				<li> DESENVOLVENDO UM SAAS PARA SOLICITAÇÃO E ACOMPANHAMENTO DE REQUERIMENTOS COM PYTHON</li>
				<li> SOFTWARE LIVRE: PRÉREQUISITOS PARA UM PROFISSIONAL EM T.I (TECNOLOGIA DA INFORMAÇÃO) NA CIDADE DE PALMARESPE</li>
				<li> ESTRATÉGIAS PARA DETECÇÃO DO DESGASTE EM UMA CAIXA DE REDUÇÃO ACOPLADA A UM MOTOR DE INDUÇÃO TRIFÁSICO</li>
				<li> EDUCAÇÃO E CORRETO DESCARTE DO RESÍDUO ELETROELETRÔNICO NO SERTÃO DO PAJEÚ</li>
				<li> ALTERNATIVAS INOVADORAS PARA OS RESÍDUOS DE EQUIPAMENTOS ELETROELETRÔNICOS (REEE) EM PESQUEIRAPE E REGIÃO</li>
				<li> IOT EDUCACIONAL: ENSINANDO GEOGRAFIA DE MANEIRA LÚDICA NO RASPBERRY PI</li>
				<li> IOT EDUCACIONAL: EXPERIÊNCIA DO ENSINO DA MATEMÁTICA COM WOLFRAM MATHEMATICA E GEOGEBRA NO RASPBERRY PI</li>
				<li> A UTILIZAÇÃO DO SOFTWARE GEOGEBRA COMO FERRAMENTA DE ENSINOAPRENDIZAGEM DA MATEMÁTICA</li>
			</ul>
</div>
  </div>
</div>
</div>


<div class="modal fade" id="modal_programacaomostra" tabindex="-1" role="dialog" aria-labelledby="programacaomostra_title">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center" id="programacaomostra_title">PROGRAMAÇÃO</h4>
        </div>
        <div class="modal-body text-justify">
			​<h4><strong>21 de Junho	</strong></h4>
	<ul class="list-group" style="font-size:x-small;">			
			<li class="list-group-item"><strong> 13:30</strong>	MAPA E JOGO DA MEMÓRIA DO PATRIMÔNIO DE IGARASSU</li>
			<li class="list-group-item"><strong> 13:45</strong>	IOT EDUCACIONAL: ANÁLISE DE FERRAMENTAS MULTIMÍDIAS NO RASPBERRY PI APLICADAS NO CONTEXTO DO ENSINOAPRENDIZAGEM</li>
			<li class="list-group-item"><strong> 14:00</strong>	SISTEMA PARA AUXILIAR DEFICIENTES VISUAIS BASEADO EM DETECÇÃO FACIAL</li>
			<li class="list-group-item"><strong> 14:15</strong>	PROPOSTA DE APLICATIVO MOBILE PARA AUXÍLIO AOS AGENTES DE COMBATE A ENDEMIAS</li>
			<li class="list-group-item"><strong> 14:30</strong>	APLICATIVO SERTÃO SEM AEDES:PROPOSTA MOBILE COLABORATIVA NA PREVENÇÃO DO AEDES AEGYPTI</li>
			<li class="list-group-item"><strong> 14:35</strong>	CONTROLE DE ROBÔGUIA PARA DEFICIENTES VISUAIS</li>
			<li class="list-group-item"><strong> 14:40</strong>	ALÔ CIDADÃO PROPOSTA DE OUVIDORIA MOBILE OPEN SOURCE</li>
			<li class="list-group-item"><strong> 14:45</strong>	DESENVOLVIMENTO DE UM SISTEMA DE INFORMAÇÃO GEOGRÁFICA PARA O MONITORAMENTO DAS OVITRAMPAS INSTALADAS NO CEMITÉRIO DA VÁRZEA</li>
			<li class="list-group-item"><strong> 15:00</strong>	SISTEMA DE INFORMAÇÕES GEOGRÁFICAS EM AMBIENTE WEB E MOBILE PARA COMPARTILHAMENTO DE DADOS DO PROJETO ÁGUAS DE AREIAS</li>
			<li class="list-group-item"><strong> 15:15</strong>	PROGRAMA CISCO NETWORKING ACADEMYIFPE</li>
			<li class="list-group-item"><strong> 15:30</strong>	SISTEMA DE DETECÇÃO DE INTRUSOS EM AMBIENTE ESCOLAR</li>
			<li class="list-group-item"><strong> 15:45</strong>	A GESI E A SUSTENTABILIDADE DA CADEIA GLOBAL DE SUPRIMENTOS DAS TIC</li>
			<li class="list-group-item"><strong> 16:00</strong>	AVALIAÇÃO DA QUALIDADE DOS SERVIÇOS PRESTADOS PELOS PROVEDORES DE ACESSO À INTERNET NA CIDADE DE FLORESTA</li>
			<li class="list-group-item"><strong> 16:15</strong>	UMA ANÁLISE DE DUAS SOLUÇÕES PARA CONNTRUÇÃO DE REDES VIRTUAIS PRIVADAS</li>
			<li class="list-group-item"><strong> 16:30</strong>	UMA APLICAÇÃO PARA CONTROLE DE ACESSO EM REDES DEFINIDAS POR SOFTWARE BASEADA EM ENDEREÇOS MAC</li>
			<li class="list-group-item"><strong> 16:45</strong>	APLICAÇÃO DE MODELOS DE REPUTAÇÃO DE AUTORES PARA ESTIMATIVA DA RELEVÂNCIA OPINIÕES NO DOMÍNIO DE JOGOS ELETRÔNICOS</li>
		</ul>
			<h4><strong> 22 de Junho </strong> </h4>
	<ul class="list-group" style="font-size:x-small;">	
			<li class="list-group-item"> <strong> 13:30 </strong>	JOGO DO MILHÃO: PREVENDO A VENDA DE JOGOS ELETRÔNICOS</li>
			<li class="list-group-item"> <strong> 13:45 </strong>	ESTUDOS E DESENVOLVIMENTO TECNOLÓGICO NA IMPLANTAÇÃO DO SISTEMA TELEMÉTRICO RAILBEE PARA MONITORAMENTO ESTRATÉGICO DOS TRENS DO METRÔ DO RECIFE</li>
			<li class="list-group-item"> <strong> 14:00 </strong>	ESTRUTURAÇÃO DE LABORATÓRIOS DE  INFORMÁTICA NAS ESCOLAS PÚBLICAS MUNICIPAIS DE PALMARESPE</li>
			<li class="list-group-item"> <strong> 14:15 </strong>	PROJETO MECÂNICO E INSTRUMENTAÇÃO DE PROTÓTIPO ROBÓTICO PARALELO TIPO DELTA PARA APLICAÇÃO DIDÁTICA</li>
			<li class="list-group-item"> <strong> 14:30 </strong>	HTTP/2</li>
			<li class="list-group-item"> <strong> 14:35 </strong>	DESENVOLVIMENTO DE UM SISTEMA DE INFORMAÇÃO  GEOGRÁFICA PARA GESTÃO DE RESÍDUOS DA CONSTRUÇÃO CIVIL</li>
			<li class="list-group-item"> <strong> 14:40 </strong>	CISCO NETRIDERS: A COMPETIÇÃO DE HABILIDADES EM T.I.C. DA CISCO NETWORKING ACADEMY</li>
			<li class="list-group-item"> <strong> 14:45 </strong>	DESENVOLVIMENTO DE DRONE QUADRICÓPTERO PARA PULVERIZAÇÃO DE PRODUTOS QUÍMICOS EM PLANTAÇÕES: IMPLEMENTAÇÃO DA ESTRATÉGIA DE CONTROLE EM SISTEMA EMBARCADO.</li>
			<li class="list-group-item"> <strong> 15:00 </strong>	MAPA E JOGO DA MEMÓRIA DO PATRIMÔNIO DE IGARASSU</li>
			<li class="list-group-item"> <strong> 15:15 </strong>	MATRACA WEB, UM SAAS PARA INCLUSÃO DE DEFICIENTES  VISUAIS NO ÂMBITO TECNOLÓGICO</li>
			<li class="list-group-item"> <strong> 15:30 </strong>	DESCOBRINDO E CONSTRUINDO TALENTOS PARA  COMPUTAÇÃO</li>
			<li class="list-group-item"> <strong> 15:45 </strong>	ÓCULOS SENSORIAIS PARA DEFICIENTES VISUAIS</li>
			<li class="list-group-item"> <strong> 16:00 </strong>	DESENVOLVIMENTO DE SISTEMA WEB PARA OTIMIZAÇÃO DO CADASTRO DE DENÚNCIAS E PROCESSOS DA VIGILÂNCIA SANITÁRIA DO MUNICÍPIO DE DE CAMARAGIBE-PE</li>
			<li class="list-group-item"> <strong> 16:15 </strong>	GAMIFICAÇÃO E TECNOLOGIA NO ENSINO DE LÍNGUAS  ESTRANGEIRAS</li>
			<li class="list-group-item"> <strong> 16:30 </strong>	OFERTA DE CURSOS DE EXTENSÃO MODALIDADE A DISTÂNCIA COMO ESTRATÉGIA  PARA OTIMIZAÇÃO DE PROCESSOS DE ARQUIVAMENTO DO DEPARTAMENTO DE  VIGILÂNCIA SANITÁRIA, CAMARAGIBE/PE, 2017.​</li>
	</ul>
</div>
  </div>
</div>
</div>