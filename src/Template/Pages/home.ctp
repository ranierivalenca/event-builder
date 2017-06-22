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
              'type' => 'Minicurso',
              'title' => 'Ensinamentos Jedi para Gestão de Equipes',
              'desc' => 'O que podemos aprender com ensinamentos da \'ordem Jedi\' para o mundo das empresas? O minicurso tratará do assunto relacionando-o com falas dos mestres da \'ordem\' para lidar com o universo das organizações, das startups e dos desafios que enfrentamos em tempos sombrios. Conviver com a diversidade de opiniões, com diferente tipos de pessoas, culturas, povos e línguas. O foco é trabalhar aspectos individuais do comportamento dos participantes na suas relações com os colegas de trabalho. A \'brincadeira\' visa aproximar o universo estranho das organizações à realidade de programadores, desenvolvedores em outros tipos de profissionais em TI.'
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
              'type' => 'Minicurso',
              'title' => 'Aprendendo a Aprender',
              'desc' => 'O minicurso aborda diversas estratégias de organização de projetos e de tempo para que os participantes possam definir seus próprios planos e realizá-los por conta própria. Seja isso passar no Vestibular ou aprender do zero a criar um site.'
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
              'Simone Amorin' => 'Software engineer que largou tudo em prol do amor pelo desenvolvimento Front-End em especial CSS. Atualmente vem atuando como CSS Evangelist e mesmo com pouco tempo de estudo já consegue impactar milhares de pessoas no Brasil. Além disso é uma WWCode Leader, organização mundial com a missão de fomentar o conhecimento de tecnologia para mulheres e incentivá-las a ingressar nessa área.'
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
            'company' => 'Sistema Jornal do Comércio de Comunicação',
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
              'Abdala Cerqueira' => '
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
      <?=
        $this->element('home/participante', [
            'name' => 'Diógenes de Souza Leão Filho',
            'company' => '',
            'year' => '2017',
            'photo' => 'diogenes_207x207.jpg',
            'about' => [
              'Diógenes de Souza Leão Filho' => '
              Diógenes de Souza Leão Filho é entusiasta e divulgador comprometido com o desenvolvimento do software livre. Analista de Sistemas pela NIC (Núcleo de Informática da Católica), graduado em Tecnologia da Informação, é atualmente diretor de negócios da Fuctura Tecnologia, empresa  de consultoria e treinamento em Software Livre, Partner Ubuntu e Partner LPI. Atua desde 2008 como Proctor LPI, divulgando a importância da certificação LPI, sendo responsável pela aplicação de provas LPI no NE. Sua maior contribuição com o movimento SL é através da coordenação do CONSOLINE, Congresso de Software Livre do NE, <a href="www.softwarelivrene.org">www.softwarelivrene.org</a>.'
            ],
            'activity' => [
              'type' => 'Mesa Redonda',
              'title' => 'Certificações na área de TI',
              'desc' => 'Nesta atividade os participantes da mesa apresentarão informações sobre a importância das certificações para os profissionais da área de TI. Certificações Cisco e GNU/Linux serão debatidas junto com o público presente.
              <br>Mediador
              <br>Ramon Mota
              <br><strong>Convidados</strong>

                <br>Leandro Almeida
                <br>Diógenes de Souza Leão Filho
                <br>Marco Eugênio


              '
            ],
            'site' => [
              'url' => 'http://www.fuctura.com.br/recife/',
              'title' => 'www.fuctura.com.br/recife/'
            ]
          ]
        )
      ?>

      <?=
        $this->element('home/participante', [
            'name' => 'Felipe Omena Marques Alves ',
            'company' => 'IFSertão',
            'year' => '2017',
            'photo' => 'felipe_210_210.jpg',
            'about' => [
              'Felipe Omena Marques Alves' => '
              Professor do IFSertão-PE/Floresta. Atualmente, é vice-coordenador do Curso Técnico de Nível Médio Integrado em Informática, além de lecionar em disciplinas relacionadas à Engenharia de Software e Engenharia de Qualidade no curso superior de Gestão de Tecnologia de Informação. É mestre em Engenharia da Computação pela Escola Politécnica de Pernambuco (POLI/UPE) onde atuou na linha de Pesquisa de Inteligência Computacional. As pesquisas realizadas nesse período basearam-se na aplicação de princípios da Orientação a Aspectos na modularização de Sistemas Multiagentes. '
            ],
            'activity' => [
              'type' => 'Palestra',
              'title' => 'Cycle Dev: Uma Fábrica de Software no Sertão Pernambucano
',
              'desc' => 'Cycle Dev é um grupo de fábrica de software do município de Floresta. A ideia surgiu no intuito de vivenciar a realidade profissional e as necessidades do mercado dentro do universo de ensino. Em menos de um ano, já temos dois clientes firmados e um software implementado já em utilização. Na palestra, falaremos um pouco das demandas e desafios que temos enfrentado no dia a dia mostrando que é possível surpreender e inovar apesar das limitações.
'
              ],
            'email' => 'felipe.alves@ifsertao-pe.edu.br'
            ]
        )
      ?>

      <?=
        $this->element('home/participante', [
            'name' => 'Denys Alexandre B. da Silva',
            'company' => 'IFRN/Currais Novos',
            'year' => '2017',
            'photo' => 'denys_210x210.jpg',
            'about' => [
              'Denys Alexandre B. da Silva' => '
             Possui graduação em Tecnólogo em Processamento de Dados - Associação Paraibana de Ensino Renovado (2005) e Especialização em Gestão da Segurança da Informação pelo CEFET-PB e UFCG (2007). Desempenhou o papel de Gerente de Suporte atuando na gerência e administração do Sistemas Operacionais Abertos e Proprietários e na administração de redes de computadores por mais de 6 anos. Possui experiência em Administração de Redes e Sistemas Operacionais. Atualmente é Professor efetivo no IFRN (Campus Currais Novos), ministrando aulas nos cursos de Técnico em Informática (Subsequente e Integrado) e Superior em Sistemas para Internet. Mestrando na área de Computação Distribuída no PPGI - Programa de Pós-Graduação em Informática na Universidade Federal da Paraíba.'
            ],
            'activity' => [
              'type' => 'Minicurso',
              'title' => 'Entendendo a exploração de vulnerabilidades em ambiente computacional.',
              'desc' => 'A exploração de vulnerabilidades cibernéticas é cada vez mais comum nos dias atuais, entender como esses eventos são descobertos e acontecem é o primeiro passo para criar-se um mecanismo de defesa. Esse minicurso tem a finalidade de introduzir como esses eventos são difundidos pela rede, o passo a passo de uma exploração de vulnerabilidade e quais os mecanismos de defesa que um usuário final pode utilizar para defender-se.'
              ],
            'email' => 'denys.silva@ifrn.edu.br'
            ]
        )
      ?>

      <?=
        $this->element('home/participante', [
            'name' => 'Ramony Evan',
            'company' => 'Manifesto Games',
            'year' => '2017',
            'photo' => 'ramony_210x210.jpg',
            'about' => [
              'Ramony Evan' => '
                Ilustradora e animadora digital, formada em Sistemas para Internet (Marista) e em Cinema de Animação (AESO), atualmente trabalhando com jogos na empresa Manifesto Games e cursando Gestão Ágil de Projetos (CESAR EDU).
                <br>
                Procura produzir arte - unindo ideias criativas, técnicas e pessoas para deixar ainda mais atrativo os projetos que desenvolve.
              '
            ],
            'activity' => [
              'type' => 'Minicurso',
              'title' => 'Arte para Jogos',
              'desc' => 'Esse curso irá abordar as várias áreas em Arte que contém o mercado de jogos.
                <br>Daremos enfoque aos mais variados profissionais, áreas de conhecimento, processos de produção que são essenciais para o sucesso da criação de um jogo.'
              ],
            'email' => 'ramonyevan13@gmail.com'
            ]
        )
      ?>

      <?=
        $this->element('home/participante', [
            'name' => 'Cris Lacerda',
            'company' => 'Fab Lab Recife',
            'year' => '2017',
            'photo' => 'crislacerda_210x210.jpg',
            'about' => [
              'Cris Lacerda' => '
                Sócia e Estrategista de Ciência, Tecnologia e Inovação do Fab Lab Recife, é Designer de Produto e mestranda em Design, Tecnologia e Cultura pela UFPE. Atua em projetos de PD&I com uso de tecnologias de Fabricação Digital e processos colaborativos cidadãos na interface Academia & Mercado, articulando Design Transdisciplinar, Inovação Social e Inteligência Coletiva para a melhoria da qualidade de vida nas cidades. É membro da Rede Recife 500 Anos, fundadora do Movimento Mulheres Makers, produtora do TEDxRecife, organizadora do Startup Weekend Recife Smart Cities, membro da STEM To STEAM Organization e colaboradora da ABNT/ISO em Gestão de P&D em Inovação, sendo certificada em Intellectual Property Management pela WIPO e Human-Centered Design pela IDEO.
              '
            ],
            'activity' => [
              'type' => 'Palestra',
              'title' => 'A Fabricação Digital e os Fab Labs.',
              'desc' => 'Nesta palestra, estudantes poderão compreender um pouco mais sobre a Revolução Digital e entrarão em contato com conceitos da Cultura Maker, aprendendo quais as principais técnicas e equipamentos da Fabricação Digital. Além disso, serão levados a conhecer as potencialidades da tecnologia e visualizar como transformar essas novas ferramentas em projetos inovadores e com propósito, por meio de exemplos de diversas inciativas desenvolvidas no Fab Lab Recife.'
              ],
            'email' => 'redes@fablabrecife.com '
            ,
            'site' => [
              'url' => 'http://www.fablabrecife.com',
              'title' => 'www.fablabrecife.com'
            ]
            ]
        )
      ?>

      <?=
        $this->element('home/participante', [
            'name' => 'Denis Alustau',
            'company' => '',
            'year' => '2017',
            'photo' => 'denisalustral_201x210.jpg',
            'about' => [
              'Denis Alustau' => '
               Sou programador backend, trabalho home office para uma empresa norte-americana chamada Boatsetter, adoro fazer network e agregar novos conhecimentos e valores.
              '
            ],
            'activity' => [
              'type' => 'Minicurso',
              'title' => 'Laravel: Criando aplicações seguras com agilidade e beleza.',
              'desc' => 'A proposta da oficina é demonstrar o Laravel, um dos frameworks PHP mais populares do mercado. Com uma comunidade em constante crescimento o Laravel fica cada vez mais popular devido a características como: facilidade de desenvolver aplicações seguras e performáticas de forma rápida, código limpo e simples, e com forte  incentivo ao uso de boas práticas de programação. O framework é construído em cima de vários componentes Symfony que garantem uma estrutura sólida para a produção de código bem testado e confiável.'
              ]

            ]
        )
      ?>

      <?=
        $this->element('home/participante', [
            'name' => 'Capibalabs',
            'company' => 'IFPE/Recife',
            'year' => '2017',
            'photo' => 'capibalabs.jpg',
            'about' => [
              'Projeto Capibalabs' => '
               Capibalabs é um grupo de pesquisa do IFPE CAMPUS Recife que vem trabalhando com prototipagem eletrônica usando plataformas de hardware livre e tem foco no Monitoramento Ambiental, na disseminação do conhecimento sobre hardware e software livres e na ideia de como eles podem ser usados para prover melhoria na qualidade de vida das pessoas. O grupo atualmente ministra aulas para sua segunda turma do “Curso de Arduino e IoT” todas as segundas-feiras para professores, alunos e servidores dos diversos campi IFPE. 
              '
            ],
            'activity' => [
              'type' => 'Apresentação',
              'title' => 'Projeto Capibalabs - Implementando IoT para Monitoramento Ambiental',
              'desc' => 'No II ENTEC – 2017 o grupo mostrará um pouco dos seus projetos.
              <br> <strong>Participantes: </strong>
                <br> Arthur Lima de Castro
                <br>Michel Henrique da Silva Nascimento
                <br>Tarcísio Augusto Ferreira da Silva Santos'
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
        <?=$this->element('activities/mostra') ?>
      </div>
    </div>
  </div>
</div>



<div class="section" id="program">
      <h1 class="text-center">Programação</h1>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-success text-uppercase">Quarta-feira, 21 de Junho</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <h5><strong>08:00h às 09:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
              Mesa de Abertura <span class="where"> (Auditório Mestre Yoda) </span>
            </h5>
          </div>
          <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>09:00h às 10:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
              Palestra: <strong>Indústria 4.0 - O que significa e o que esperar</strong> - Rafael Melo Macieira (Auditório Mestre Yoda)
            </h5>
          </div>
          <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>10:00h às 11:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
            Palestra: <strong>Segurança para Web Hosting</strong> - Romero Ayub <span class="where"> (Auditório Mestre Yoda) </span>
            </h5>
          </div>
          <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>11:00h às 12:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
              Mesa de Redonda: <strong>Certificações na área de TI</strong> - Leandro Almeida, Marco Eugênio, Diógenes de Souza Leão Filho <span class="where"> (Auditório Mestre Yoda) </span>
            </h5>
          </div>



            <div class="col-md-12"><hr></div>
            <div class="col-md-2">
              <h5><strong>12:00h às 13:00h</strong></h5>
            </div>
            <div class="col-md-10">
              <h5>
                Intervalo para Almoço <span class="where"> (Hall) </span>
              </h5>
            </div>

          <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>13:00h às 15:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
              Minicurso: <strong>Disponibilidade em Redes Locais</strong> - Leandro Almeida <span class="where"> (Sala Obi-Wan Kenobi) </span>
            </h5>
          </div>

          <div class="col-md-12"><hr></div><div class="col-md-2">
          <h5><strong>13:00h às 14:20h</strong></h5>
        </div>
        <div class="col-md-10">
          <h5>
            Minicurso: <strong>Entendendo a exploração de vulnerabilidades em ambiente computacional</strong> - Denys Alexandre B. da Silva<span class="where"> (Sala Anakin Skywalker) </span>
          </h5>
        </div>

          <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>14:20h às 16:20h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
               <strong>Escovando Bits</strong>  <span class="where"> (Sala Anakin Skywalker) </span>
            </h5>
          </div>

          <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>13:30h às 16:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
               <strong>Mostra Acadêmica - Seção 01</strong>  <span class="where"> (Auditório Mestre Yoda) </span>
            </h5>
          </div>

          <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>13:00h às 15:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
                 <strong>Quiz Nerd - 1º Rodada</strong>  <span class="where"> (Sala Luke Skywalker) </span>
            </h5>
          </div>


          <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>15:00h às 17:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
               <strong>Concurso de Desenho Nerd - 1º Fase </strong>  <span class="where"> (Sala Luke Skywalker) </span>
            </h5>
          </div>


          <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>15:00h às 17:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
               <strong>Torneio de League of Legends - 1º Rodada</strong>  <span class="where"> (Sala Obi-Wan Kenobi) </span>
            </h5>
          </div>




          <div class="col-md-12"><hr></div>

          <div class="col-md-2">
            <h5><strong>12:00h às 17:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
              Games <span class="where"> (Corredor, Sala Luke Skywalker)</span>
            </h5>
            <p>
              Sala Luke Skywalker, com consoles rodando emuladores e jogos modernos (Mortal Kombat X, FIFA 2016, Just Dance)
            </p>
          </div>

        </div>

      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="text-success text-uppercase">Quinta-feira, 22 de Junho</h3>
          </div>
        </div>
        <div class="row">

        <div class="col-md-2">
          <h5><strong>8:00h às 9:00h</strong></h5>
        </div>
        <div class="col-md-10">
          <h5>
            Palestra: <strong>Cycle Dev: Uma Fábrica de Software no Sertão Pernambucano</strong> - Felipe Alves <span class="where"> (Auditório Mestre Yoda) </span>
          </h5>
        </div>

        <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>9:00h às 10:30h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
              Workshop: <strong>Dominando CSS Layouts na prática com Grid Layout</strong> - Simone Amorin <span class="where"> (Sala Obi-Wan Kenobi) </span>
            </h5>
          </div>



        <div class="col-md-12"><hr></div><div class="col-md-2">
          <h5><strong>9:00h às 10:00h</strong></h5>
        </div>
        <div class="col-md-10">
          <h5>
            Palestra: <strong>O que é Composer e como aproveitá-lo</strong> - Abdala Cerqueira  <span class="where"> (Auditório Mestre Yoda) </span>
          </h5>
        </div>


        <div class="col-md-12"><hr></div><div class="col-md-2">
          <h5><strong>10:00h às 11:00h</strong></h5>
        </div>
        <div class="col-md-10">
          <h5>
            Palestra: <strong>Mulher na área de T.I.</strong> - Talita Oliveira <span class="where"> (Auditório Mestre Yoda) </span>
          </h5>
          </div>

          <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>10:30h às 12:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
              Minicurso: <strong>Laravel: Criando aplicações seguras com agilidade e beleza.</strong> - Denis Alustau <span class="where"> (Sala Obi-Wan Kenobi) </span>
            </h5>
          </div>

        <div class="col-md-12"><hr></div><div class="col-md-2">
          <h5><strong>11:00h às 12:00h</strong></h5>
        </div>
        <div class="col-md-10">
          <h5>
            Palestra: <strong> A Fabricação Digital e os Fab Labs </strong> Cris Lacerda- Fab Lab Recife <span class="where"> (Auditório Mestre Yoda) </span>
          </h5>
        </div>





        <div class="col-md-12"><hr></div>
        <div class="col-md-2">
          <h5><strong>12:00h às 13:00h</strong></h5>
        </div>
        <div class="col-md-10">
          <h5>
            Intervalo para Almoço <span class="where">  </span>
          </h5>
        </div>
        <div class="col-md-12"><hr></div>
        <div class="col-md-2">
          <h5><strong>13:00h às 15:00h</strong></h5>
        </div>
        <div class="col-md-10">
          <h5>
            Minicurso: <strong>Aprendendo a Aprender</strong> - Michael Barney  <span class="where"> (Sala Obi-Wan Kenobi) </span>
          </h5>
          </div>

          <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>13:00h às 15:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
               Minicurso <strong>Ensinamentos Jedi para Gestão de Equipes</strong> - Raquel Lira  <span class="where"> (Sala Anakin Skywalker) </span>
            </h5>
          </div>


          <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>13:30h às 16:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
               <strong>Mostra Acadêmica - Seção 02</strong>  <span class="where"> (Auditório Mestre Yoda) </span>
            </h5>
          </div>

          <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>15:00h às 16:30h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
              Minicurso: <strong>Arte para Jogos</strong> - Ramony Evan <span class="where"> (Sala Anakin Skywalker) </span>
            </h5>
          </div>

          <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>15:00h às 17:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
               <strong>Concurso de Desenho Nerd - 2º Fase</strong>  <span class="where"> (Sala Luke Skywalker) </span>
            </h5>
          </div>


          <div class="col-md-12"><hr></div>
          <div class="col-md-2">
            <h5><strong>15:00h às 17:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
               <strong>Torneio de League of Legends - Finais</strong>  <span class="where"> (Sala Obi-Wan Kenobi) </span>
            </h5>
          </div>

          <div class="col-md-12"><hr></div>

          <div class="col-md-2">
            <h5><strong>12:00h às 17:00h</strong></h5>
          </div>
          <div class="col-md-10">
            <h5>
              Games <span class="where"> (Corredor, Sala Luke Skywalker)</span>
            </h5>
            <p>
              Sala Luke Skywalker, com consoles rodando emuladores e jogos modernos (Mortal Kombat X, FIFA 2016, Just Dance)
            </p>
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
      <div class="col-xs-12 col-md-8 col-md-offset-2">
        <?=$this->element('activities/escovandobits') ?>
      </div>
    </div>
  </div>
</div>

<div  id="quiznerd"  class="section">
  <div class="container" >
    <div class="row">
      <div  class="col-xs-12 col-md-8 col-md-offset-2">
        <?=$this->element('activities/quiznerd') ?>
      </div>

    </div>
  </div>
</div>


<div  id="desenhonerd"  class="section">
  <div class="container" >
    <div class="row">
      <div  class="col-xs-12 col-md-8 col-md-offset-2">
        <?=$this->element('activities/desenhonerd') ?>
      </div>

    </div>
  </div>
</div>


<div id="torneiolol" class="section">
  <div class="container">
    <div class="row">
      <div  class="col-xs-12 col-md-8 col-md-offset-2">
        <?=$this->element('activities/torneiolol') ?>
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
                <div class="col-md-4 col-md-offset-0">
                  <img src="img/vitarella_250x250-min.png" alt="" class="img-rounded img-responsive">
                </div>
                <div class="col-md-4 col-md-offset-0">
                  <img src="img/facig.png" alt="" class="img-rounded img-responsive">
                </div>
                <div class="col-md-4 col-md-offset-0">
                  <img src="img/soabraz_250_190-min.png" alt="" class="img-rounded img-responsive">
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>