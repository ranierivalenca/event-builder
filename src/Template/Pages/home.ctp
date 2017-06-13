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
<div class="banner">
  <img src="img/banner_2017_1701x651-min.png" alt="">
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
            'name' => 'Rafael Melo Macieira',
            'company' => 'SENAI',
            'year' => '2017',
            'photo' => 'rafael_210x210.jpg',
            'about' => [
              'Rafael Melo Macieira' => 'Doutorando em Ciência da Computação pela Universidade Federal de Pernambuco desde 2013, Rafael é candidato a defesa de uma tese sobre uma técnica para o aumento da confiabilidade de sistemas embarcados através da validação de software dependentes de hardware a partir de modelos formais. Rafael é graduado em Ciência da Computação pela Universidade Federal de Sergipe desde 2006 e defendeu seu mestrado pela Universidade Federal de Pernambuco em 2011. Em 2005 Rafael foi aprovado no concurso público para o cargo de Programador do Tribunal de Justiça de Sergipe, onde trabalhou por 4 anos, até 2009. Em 2007 passou a integrar o quadro funcional da empresa de jogos Lumentech, onde atuou como analista de sistemas, e em 2008 foi aprovado no concurso público para o cargo de Professor Substituto da Universidade Federal de Sergipe no curso de Ciência da Computação, onde lecionou durante um ano. Em 2009 se afastou dos 3 cargos para dar início ao mestrado. Em 2011 passou a ser pesquisador bolsista DTI-CNPq até 2013, quando foi aprovado no doutorado. Atualmente, desde 2016, é Pesquisador Industrial no Instituto SENAI de Inovação para Tecnologias de Informação e Comunicação, em Recife-PE.'
            ],
            'activity' => [
              'type' => 'Palestra',
              'title' => 'Indústria 4.0 - O que significa e o que esperar',
              'desc' => 'Indústria 4.0 é um modelo de indústria, associado ao termo "Fábrica Inteligente", que agrega tecnologias de automação e troca de dados com base em conceitos como Sistemas ciber-físicos (CPS), Internet das Coisas (IoT) e Computação em Nuvem. Mas o que isto difere do modelo atual? E o que este modelo influenciará nas profissões do futuro?'
            ],
            'email' => 'rafael.macieira@pe.senai.br',
            'site' => [
              'url' => 'http://rafael.macieiras.com.br/',
              'title' => 'rafael.macieiras.com.br/'
            ],
            'social' => [
              'linkedin' => [
                'url' => ' https://www.linkedin.com/in/rafael-melo-macieira-9144b015/',
                'title' => 'Rafael Melo Macieira'
              ]
            ]
          ]
        )
      ?>
      <?=
        $this->element('home/participante', [
            'name' => 'Raquel Lira',
            'company' => 'IFPE - Campus Igarassu',
            'year' => '2017',
            'photo' => 'raquel_210x210.jpg',
            'about' => [
              'Raquel Lira' => 'Professora de Gestão e Negócios do Instituto Federal de Pernambuco - IFPE, Campus Igarassu. Graduada e Mestre em Administração (PROPAD/UFPE). Atualmente, está engajada no ensino de ferramentas de gestão voltadas para inovação e empreendedorismo. É pesquisadora das temáticas que envolvem Políticas Públicas, Economia Criativa e Empreendedorismo.'
            ],
            'activity' => [
              'type' => 'Mini-curso',
              'title' => 'Ensinamentos Jedi para Gestão de Equipes',
              'desc' => 'O que podemos aprender com ensinamentos da \'ordem Jedi\' para o mundo das empresas? O mini-curso tratará do assunto relacionando-o com falas dos mestres da \'ordem\' para lidar com o universo das organizações, das startups e dos desafios que enfrentamos em tempos sombrios. Conviver com a diversidade de opiniões, com diferente tipos de pessoas, culturas, povos e línguas. O foco é trabalhar aspectos individuais do comportamento dos participantes na suas relações com os colegas de trabalho. A \'brincadeira\' visa aproximar o universo estranho das organizações à realidade de programadores, desenvolvedores em outros tipos de profissionais em TI.'
            ],
            'social' => [
              'twitter' => [
                'url' => 'https://twitter.com/raquellirax',
                'title' => '@raquellirax'
              ],
              'facebook' => [
                'url' => 'https://www.facebook.com/profaraquel.lira',
                'title' => 'profaraquel.lira'
              ],
              'instagram' => [
                'url' => 'https://www.instagram.com/raquellirax',
                'title' => '@raquellirax'
              ]
            ]
          ]
        )
      ?>

      <?=
        $this->element('home/participante', [
            'name' => 'Michael Barney',
            'company' => 'Banana Digital',
            'year' => '2017',
            'photo' => 'banana_210x210.jpg',
            'about' => [
              'Michael Barney' => 'Graduando no curso de Engenharia da Computação na UFPE e Técnico em Eletrônica pelo IFPE: Campus Recife. Atua no laboratório DEXTER do IFPE, onde trabalhar em diversos projetos de pesquisa (como o Synesthesia Vision). É um dos fundadores da Banana Digital e colaborador do Programa Despertando Vocações de Tecnologia (PDVT) no IFPE.',
              'Banana Digital' => 'A Banana Digital é um grupo especializado em Educação Tecnológica. Com lema "Aprender, Fazer, Mudar o Mundo!", planejamos novas maneiras de aprender de modo interativo e eficiente.'
            ],
            'activity' => [
              'type' => 'Workshop & Hackaton',
              'title' => 'HACK&LEARN: Workshop + Hackaton',
              'desc' => 'Modelo de ensino desenvolvido para combinar elementos de HACKATONS e WORKSHOPS com o objetivo de introduzir PBL (Project Based Learning) em eventos de ensino de tecnologia. Esta edição do Hack&Learn terá como tema "Mundo dos Bots", portanto os participantes poderão desenvolver interfaces únicas através de "conversas" em plataformas como Messenger, Skype e Google Home.
                <br> Assista o vídeo e saiba mais sobre o Hack&Learn:
                <br>
                <strong><a href="https://www.youtube.com/watch?v=tYE1hDW-84k" target="_blank">
                 www.youtube.com/watch?v=tYE1hDW-84k</a></strong>'
            ],
            'sites' => [
              ['url' => 'michaelbarney.com'],
              ['url' => 'www.bananadigital.xyz']
            ],
            'social' => [
              'youtube' => [
                'url' => 'https://www.youtube.com/channel/UCQxAaBFeP4Zx8fRoDgBIMwQ',
                'title' => 'YouTube'
              ],
              'facebook' => [
                'url' => 'https://www.facebook.com/bananadigital.inc',
                'title' => 'Facebook'
              ],
              'linkedin' => [
                'url' => 'https://www.linkedin.com/company/banana-digital?report%2Esuccess=6gcCQr75xprPO7XYhvjZ8J37EFZJUBSzv0j34tpx3ZPEn9V1bHBO6CQUThx6KoF16JJFVy',
                'title' => 'LinkedIn'
              ]
            ]
          ]
        )
      ?>

      <?=
        $this->element('home/participante', [
            'name' => 'Romero Ayub',
            'company' => 'ServHost',
            'year' => '2017',
            'photo' => 'romero_ayub_210x210.jpg',
            'about' =>  [
              'Romero Ayub' => '32 anos dos quais 14 dedicados a empresa ServHost, graduado em redes pela Unibratec, Pós-Graduado em segurança da informação pela faculdade Santa Maria. Trabalha com servidores Linux, BSD e Windows. Tem conhecimento em firewall para aplicações web, sistemas de monitoramento, servidores web (Apache, Nginx, Litespeed e IIS), Banco de dados (MySQL, PostgreSQL, SQL Server) virtualização (OpenVZ e KVM), sistema de cache (Litespeed Cache e Varnish), gerenciamento de backups em nuvem.'
            ],
            'activity' => [
              'type' => 'Palestra',
              'title' => 'Segurança para Web Hosting',
              'desc' => 'Será abordado sistemas específicos para Hosting, segurança web, criptografia, ataques, monitoramentos e cloud.'
            ],
            'email' => 'romeroayub@gmail.com',
            'site' => [
              'url' => 'http://www.servhost.com.br',
              'title' => 'www.servhost.com.br'
            ],
            'social' => [
              'facebook' => [
                'url' => 'http://fb.com/romeroayub',
                'title' => 'romeroayub'
              ],
              'linkedin' => [
                'url' => 'https://br.linkedin.com/in/romero-ayub-82157a33',
                'title' => 'Romero Ayub'
              ],
              'instagram' => [
                'url' => 'http://instagram.com/romeroayub',
                'title' => '@romeroayub'
              ],
            ]
          ]
        )
      ?>

      <?=
        $this->element('home/participante', [
            'name' => 'Simone Amorin',
            'company' => 'CSS Evangelist',
            'year' => '2017',
            'photo' => 'simone_210x210.png',
            'about' => [
              'Simone Amorin' => 'Software engineer que largou tudo em prol do amor pelo desenvolvimento Front-End em especial CSS. Atualmente vem atuando como CSS Evangelist e mesmo com pouco tempo de estudo já consegue impactar milhares de pessoal no Brasil. Além disso é uma WWCode Leader, organização mundial com a missão de fomentar o conhecimento de tecnologia para mulheres e incentivá-las a ingressar nessa área.'
            ],
            'activity' => [
              'type' => 'Workshop',
              'title' => 'Dominando CSS Layouts na prática com Grid Layout',
              'desc' => 'Um mini-workshop sobre como trabalhar e pensar no desenvolvimento de layout de forma moderna. Apresentando de forma prática os conceitos por trás da nova especificação de CSS Grid, aplicando esse conhecimento em um projetinho básico do zero, criando uma interface responsiva de maneira rápida e simples.'
            ],
            'email' => 'simoneas02@hotmail.com',
            'site' => [
              'url' => 'https://simoneas02.github.io/',
              'title' => 'simoneas02.github.io'
            ],
            'social' => [
              'linkedin' => [
                'url' => 'https://www.linkedin.com/in/simone-amorim-311a3a87/',
                'title' => 'Simone Amorim'
              ],
              'twitter' => [
                'url' => 'https://twitter.com/samorim02',
                'title' => '@samorim02'
              ],
              'github' => [
                'url' => 'https://github.com/simoneas02/',
                'title' => 'simoneas02'
              ]
            ]
          ]
        )
      ?>

      <?=
        $this->element('home/participante', [
            'name' => 'Talita Oliveira',
            'company' => '',
            'year' => '2017',
            'photo' => 'talita_210x210.png',
            'about' => [
              'Talita Oliveira' => 'Talita tem 25 anos é formada em Sistemas de Informação e Pós Graduanda em Design de Web Apps.
                <br>
                Está começando a adotar a corrida como hobbie para parar de ser sedentária. Descobriu-se no mundo da tecnologia apenas porque gostava de computador. Hoje é programadora Back-End, apaixonada por Front-End e buscando sempre aprimorar-se em ambas as áreas'
            ],
            'activity' => [
              'type' => 'Palestra',
              'title' => 'Mulher na área de T.I.',
              'desc' => 'Mostrando mais ou menos como é a vida de uma mulher na área de T.I., uma área com alguns tabus, esteriótipos e dominado por homens, onde estamos cada vez mais tentando conquistar nosso espaço como mulher e buscando a igualdade de gêneros. Além da luta externa para conquistar nosso espaço, há também a luta contra si mesma, com pensamentos negativos a respeito do que faz na área em comparação com outras pessoas.'
            ],
            'social' => [
              'linkedin' => [
                'url' => 'https://br.linkedin.com/in/litaaoliveira',
                'title' => 'Talita Oliveira'
              ],
              'github' => [
                'url' => 'https://github.com/talitaoliveira',
                'title' => 'talitaoliveira'
              ],
              'codepen' => [
                'url' => 'https://codepen.io/talitaoliveira',
                'title' => 'talitaoliveira'
              ]
            ]
          ]
        )
      ?>


      <?=
        $this->element('home/participante', [
            'name' => 'Leandro Almeida',
            'company' => 'IFPB',
            'year' => '2017',
            'photo' => 'leandro_210x210.png',
            'about' => [
              'Leandro Almeida' => 'Graduado em Redes de Computadores, especialista em Segurança da Informação, mestre em Informática pela Universidade Federal da Paraíba, certificado ITILv3 e CCNA, atualmente é Professor no Instituto Federal de Educação, Ciência e Tecnologia da Paraíba e instrutor oficial do programa Cisco Networking Academy. Tem interesse nas áreas de Redes de Computadores, Software Livre, Educação à Distância, Governança de TI, Cloud Computing, Software Defined Network e Segurança da Informação. '
            ],
            'activity' => [
              'type' => 'Oficina',
              'title' => 'Disponibilidade em Redes Locais',
              'desc' => 'O objetivo é realizar uma oficina totalmente prática (hands-on), abordando os principais temas acerca da disponibilidade em redes locais, desde os dispositivos, passando pelos protocolos e chegando até as aplicações.'
            ],
            'email' => 'lcavalcanti.almeida@gmail.com',
            'site' => [
              'url' => 'http://www.leandrocalmeida.com',
              'title' => 'www.leandrocalmeida.com
'
            ]
          ]
        )
      ?>

      <?=
        $this->element('home/participante', [
            'name' => 'Abdala Cerqueira',
            'company' => '',
            'year' => '2017',
            'photo' => 'abdala_210x210.png',
            'about' => [
              'Leandro Almeida' => '
              Pai de três, marido de uma e feliz proprietário de um fusca 69. 
              <br>Tem leve tendências a passar o dia escrevendo e lendo códigos. 
              <br>Apaixonado pela filosofia software livre, adora comunidades e liberdade. '
            ],
            'activity' => [
              'type' => 'Palestra',
              'title' => 'O que é Composer e como aproveitá-lo',
              'desc' => 'O Composer é uma excelente ferramenta para começar e buscar bibliotecas para compor o seu projeto. Vamos explorar todo esse potencial.'
            ],
            'email' => 'abdala.cerqueira@gmail.com',
            'site' => [
              'url' => 'http://abda.la',
              'title' => 'abda.la
'
            ],
            'social' => [
              'github' => [
                'url' => 'https://github.com/abdala',
                'title' => 'abdala'
              ]
            ]
          ]
        )
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
          A submissão de trabalhos deve ser feita através de um resumo contendo duas páginas sobre o projeto. Os projetos selecionados pela comissão acadêmica farão uma apresentação oral sobre o projeto com <strong>10 minutos</strong> de duração e <strong>5 minutos</strong> para perguntas.
        </p>
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
            <?php endif ?>
          </div>
        </div>






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




<div id="escovandobits" class="section">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 col-md-offset-3">
        <?=$this->element('activities/escovandobits') ?>
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


<div id="support" class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Apoio</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="row">

              <div class="col-md-6 col-md-offset-3">
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <img src="img/facig.png" alt="" class="img-rounded img-responsive">
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>