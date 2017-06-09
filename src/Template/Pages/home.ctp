<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = 'default';
$this->assign('title', 'ENTEC 2017 - Encontro de Tecnologia da Informação do IFPE');


$banner = Configure::read('Event.lanes.banner');

$loguser = $this->request->session ()->read ( 'Auth.User' );
?>




<div id="home"></div>
<div style="opacity: 1;">
  <img src="img/banner_2017_1701x651-min.png" style="width: 100%" alt="">
  <div class="container">
    <div class="row">
    </div>
  </div>
</div>





<div id="attractions" class="section">
<br>
  <h1 class="text-center">Participações</h1>
  <div class="container">
    <div class="row">

      <?=
        $this->element('home/participante', [
            'name' => 'Raquel Lira',
            'company' => 'IFPE - Campus Igarassu',
            'year' => '2017',
            'photo' => 'raquel_210x210.jpg',
            'text' => '
                <p>
                  Sobre <strong>Raquel Lira</strong>
                </p>
                <p>
                  Professora de Gestão e Negócios do Instituto Federal de Pernambuco - IFPE, Campus Igarassu. Graduada e Mestre em Administração (PROPAD/UFPE). Atualmente, está engajada no ensino de ferramentas de gestão voltadas para inovação e empreendedorismo. É pesquisadora das temáticas que envolvem Políticas Públicas, Economia Criativa e Empreendedorismo.
                </p>
                <p>
                  Mini-curso: <strong>Ensinamentos Jedi para Gestão de Equipes</strong>
                </p>
                <p>
                  O que podemos aprender com ensinamentos da \'ordem Jedi\' para o mundo das empresas? O mini-curso tratará do assunto relacionando-o com falas dos mestres da \'ordem\' para lidar com o universo das organizações, das startups e dos desafios que enfrentamos em tempos sombrios. Conviver com a diversidade de opiniões, com diferente tipos de pessoas, culturas, povos e línguas. O foco é trabalhar aspectos individuais do comportamento dos participantes na suas relações com os colegas de trabalho. A \'brincadeira\' visa aproximar o universo estranho das organizações à realidade de programadores, desenvolvedores em outros tipos de profissionais em TI.
                </p>

                <p> Redes Sociais</p>
                <ul style="list-style-type:none">
                  <li><a href="https://twitter.com/raquellirax" target="_blank"><i class="fa fa-twitter"></i> @raquellirax</a>
                  </li>
                  <li ><a href="https://www.facebook.com/profaraquel.lira" target="_blank">
                  <i class="fa fa-facebook fa-lg"></i>profaraquel.lira </a>
                  </li>
                  <li ><a href="https://www.instagram.com/raquellirax" target="_blank">
                  <i class="fa fa-instagram fa-lg"></i> @raquellirax</a>
                  </li>
                </ul>'
        ])
      ?>

      <?=
        $this->element('home/participante', [
            'name' => 'Michael Barney',
            'company' => 'Banana Digital',
            'year' => '2017',
            'photo' => 'banana_210x210.jpg',
            'text' => '
                <p>
                  Sobre <strong>Michael Barney</strong>
                </p>
                <p>
                  Graduando no curso de Engenharia da Computação na UFPE e Técnico em Eletrônica pelo IFPE: Campus Recife. Atua no laboratório DEXTER do IFPE, onde trabalhar em diversos projetos de pesquisa (como o Synesthesia Vision). É um dos fundadores da Banana Digital e colaborador do Programa Despertando Vocações de Tecnologia (PDVT) no IFPE.
                  <br>Site: <a href="michaelbarney.com" target="_blank">
                michaelbarney.com</a>
                </p>

                <p>
                  Sobre <strong>Banana Digital</strong>
                </p>
                <p>
                  A Banana Digital é um grupo especializado em Educação Tecnológica. Com lema "Aprender, Fazer, Mudar o Mundo!", planejamos novas maneiras de aprender de modo interativo e eficiente.
                </p>


                <p>
                  Atividade: <strong>HACK&LEARN: Workshop + Hackaton</strong>
                </p>
                <p>
                  Modelo de ensino desenvolvido para combinar elementos de HACKATONS e WORKSHOPS com o objetivo de introduzir PBL (Project Based Learning) em eventos de ensino de tecnologia. Esta edição do Hack&Learn terá como tema "Mundo dos Bots", portanto os participantes poderão desenvolver interfaces únicas através de "conversas" em plataformas como Messenger, Skype e Google Home.
                </p>
                <p>Site: <a href="http://www.bananadigital.xyz/" target="_blank">
                www.bananadigital.xyz</a></p>
                <p> Redes Sociais</p>
                <ul style="list-style-type:none">
                  <li><a href="https://www.youtube.com/channel/UCQxAaBFeP4Zx8fRoDgBIMwQ" target="_blank"><i class="fa fa-youtube"></i> YouTube</a>
                  </li>
                  <li ><a href="https://www.facebook.com/bananadigital.inc" target="_blank">
                  <i class="fa fa-facebook fa-lg"></i> Facebook</a>
                  </li>
                  <li ><a href="https://www.linkedin.com/company/banana-digital?report%2Esuccess=6gcCQr75xprPO7XYhvjZ8J37EFZJUBSzv0j34tpx3ZPEn9V1bHBO6CQUThx6KoF16JJFVy" target="_blank">
                  <i class="fa fa-linkedin fa-lg"></i> LinkedIn</a>
                  </li>
                </ul>'
        ])
      ?>

      <?=
        $this->element('home/participante', [
            'name' => 'Romero Ayub',
            'company' => 'ServHost',
            'year' => '2017',
            'photo' => 'romero_ayub_210x210.jpg',
            'text' => '
                <p>
                  Sobre <strong>Romero Ayub</strong>
                </p>
                <p>
                  32 anos dos quais 14 dedicados a empresa ServHost, graduado em redes pela Unibratec, Pós-Graduado em segurança da informação pela faculdade Santa Maria. Trabalha com servidores Linux, BSD e Windows. Tem conhecimento em firewall para aplicações web, sistemas de monitoramento, servidores web (Apache, Nginx, Litespeed e IIS), Banco de dados (MySQL, PostgreSQL, SQL Server) virtualização (OpenVZ e KVM), sistema de cache (Litespeed Cache e Varnish), gerenciamento de backups em nuvem.
                </p>
                <p>
                  Palestra: <strong>Segurança para Web Hosting</strong>
                </p>
                <p>
                  Será abordado sistemas específicos para Hosting, segurança web, criptografia, ataques, monitoramentos e cloud.
                </p>
                <p>Site: <a href="www.servhost.com.br" target="_blank">
                www.servhost.com.br</a></p>
                <p><i class="fa fa-envelope fa-lg"></i> romeroayub@gmail.com</p>
                <p> Redes Sociais</p>
                <ul style="list-style-type:none">

                  <li ><a href="http://fb.com/romeroayub" target="_blank">
                  <i class="fa fa-facebook fa-lg"></i> romeroayub</a>
                  </li>

                  <li ><a href="https://br.linkedin.com/in/romero-ayub-82157a33" target="_blank">
                  <i class="fa fa-linkedin fa-lg"></i> Romero Ayub</a>
                  </li>
                  <li ><a href="http://instagram.com/romeroayub" target="_blank">
                  <i class="fa fa-instagram fa-lg"></i> @romeroayub</a>
                  </li>

                </ul>'
        ])
      ?>

    </div>
  </div>
</div>


<div id="academic" class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-justify">
      <br>
        <h2 class="text-center">Mostra de Trabalho de Pesquisa e Extensão em Tecnologia</h2>
        <p>
          A <strong>Mostra de Trabalho de Pesquisa e Extensão em Tecnologia</strong> no ENTEC oferece aos professores, técnicos e alunos da área de TI a oportunidade de divulgar os seus projetos, receber feedback e realizar networking entre pesquisadores e extensionistas da área de TI.
        </p>

        <p>
          A submissão de trabalhos deve ser feita através de um resumo contendo uma página sobre o projeto. Os projetos selecionados pela comissão acadêmica farão uma apresentação oral sobre o projeto com <strong>10 minutos</strong> de duração e <strong>5 minutos</strong> para perguntas.
        </p>
        <blockquote>
          <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-8  col-sm-offset-2 col-xs-8 col-xs-offset-2">
            <div class="btn-group btn-block">
            <button type="button" class="btn btn-block btn-primary dropdown-toggle" data-toggle="dropdown"><i class="fa fa-book fa-lg"></i> SUBMISSÕES  <span class="caret"></span>
            </button>
            <ul class="dropdown-menu inverse-dropdown" role="menu">
              <li>
                <?php
                  echo $this->Html->link ( '<i class="fa fa-upload fa-lg"></i> '.' Enviar Artigo', array (
                      'controller' => 'papers',
                      'action' => 'add'), array('escape' => false) );
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
            </div>
          </div>

        </div>

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
              <li><strong>14 de Junho</strong> - Fim do prazo para entrega dos resumos</li>
              <li><strong>16 de Junho</strong> - Divulgação dos trabalhos aceitos</li>
              <li><strong>21 e 22 de Junho</strong> - Apresentação oral dos artigos</li>
              <li><strong>30 de junho</strong> - Fim do prazo para entrega da versão final dos resumos (a ser publicada nos anais do evento).</li>
              <li><strong>31 de Julho</strong> - Lançamento dos Anais no site do ENTEC.</li>
            </ul>
          </p>
        </blockquote>
        
        
        

        

      </div>
    </div>

  </div>
</div>

<div id="register" class="section">
  <div class="container">
    <div class="row">
      <br>
      <h2 class="text-center">INSCRIÇÕES ABERTAS!</h2>
      <div class="col-md-8 col-md-offset-2 text-center">
        <p>As inscrições para participar do ENTEC são gratuitas!  </p>

        <?php if($loguser['isInscrito']): ?>
          <p> <?= $loguser['nome'] ?>, você já esta inscrito no ENTEC 2017!</p>
        <?php else: ?>
          <p class="text-center">
            Se você participou do <strong>ENTEC 2016</strong>, apenas clique <strong>INSCREVER-SE</strong> para realizar seu login e confirmar a inscrição.
          </p>
          <p class="text-center">
            <?= $this->Html->link(
              'INSCREVER-SE',
              array('controller'=>'registrations','action'=>'register'),
              array('class'=>'btn btn-lg btn-success btn-md btn-block', 'escape' => false));
            ?>
          </p>

          <p class="text-center">
            Não participou da edição anterior? Crie uma conta e inscreva-se no evento!
          </p>

          <p class="text-center">
            <?= $this->Html->link(
              'Criar uma conta</i>',
              array('controller'=>'users','action'=>'add'),
              array('class'=>'btn btn-lg btn-warning btn-md btn-block', 'escape' => false));
            ?>
          </p>
        <?php endif; ?>
      </div>
    </div>

  </div>
</div>



<div id="where" class="section" >
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2715.191062021682!2d-34.911013006151535!3d-7.855608940417701!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x77802d54bdb66e80!2sFACIG!5e0!3m2!1spt-BR!2sbr!4v1454417639340" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-6">
        <h1>Local</h1>
        <h3>Instituto Federal de Pernambuco</h3>
        <h4>Campus Igarassu</h4>
        <p>
          <br>
          Sede Provisória Faculdade de Igarassu (Facig) – Avenida Alfredo Bandeira de Melo S/N, BR-101 Norte, Km 44, Igarassu-PE
        </p>
      </div>
    </div>
  </div>
</div>