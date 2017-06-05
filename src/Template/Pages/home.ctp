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

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>




<div style="padding-top: 50px;"></div>
		<div style="opacity: 1; " id="home">
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

          <div class="col-md-3">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="thumbnail attraction">
                  <img src="img/participantes_2017/raquel_210x210.jpg" alt="" class="img-rounded img-responsive">
                  <div class="caption">
                    <h4>
                      Raquel Lira<br>
                      <small>IFPE - Campus Igarassu</small>
                    </h4>
                    <h5 class="text-center">
                      <a href="#" data-toggle="modal" data-target="#modal_raquel"><span class="fa fa-plus-square"></span> Saiba mais</a>
                    </h5>
                    <div class="modal fade" id="modal_raquel" tabindex="-1" role="dialog" aria-labelledby="raquel_title">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="raquel_title">Raquel Lira</h4>
                          </div>
                          <div class="modal-body">
                            
                            <p>
                              Palestra: <strong>Ensinamentos Jedi para Gestão de Equipes</strong>
                            </p>
                            <p>
                              O que podemos aprender com ensinamentos da 'ordem Jedi' para o mundo das empresas? O mini-curso tratará do assunto relacionando-o com falas dos mestres da 'ordem' para lidar com o universo das organizações, das startups e dos desafios que enfrentamos em tempos sombrios. Conviver com a diversidade de opiniões, com diferente tipos de pessoas, culturas, povos e línguas. O foco é trabalhar aspectos individuais do comportamento dos participantes na suas relações com os colegas de trabalho. A 'brincadeira' visa aproximar o universo estranho das organizações à realidade de programadores, desenvolvedores em outros tipos de profissionais em TI.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="row">
              <div class="col-md-10 col-md-offset-1">
                <div class="thumbnail attraction">
                  <img src="img/participantes_2017/banana_210x210.jpg" alt="" class="img-rounded img-responsive">
                  <div class="caption">
                    <h4>
                      Banana Digital<br>
                    </h4>
                    <h5 class="text-center">
                      <a href="#" data-toggle="modal" data-target="#modal_banana"><span class="fa fa-plus-square"></span> Saiba mais</a>
                    </h5>
                    <div class="modal fade" id="modal_banana" tabindex="-1" role="dialog" aria-labelledby="banana_title">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="banana_title">Banana Digital</h4>
                          </div>
                          <div class="modal-body">
                            
                            <p>
                              Atividade: <strong>HACK&LEARN: Workshop + Hackaton</strong>
                            </p>
                            <p>
                              Modelo de ensino desenvolvido para combinar elementos de HACKATONS e WORKSHOPS com o objetivo de introduzir PBL (Project Based Learning) em eventos de ensino de tecnologia.
                            </p>
                            <p>WebSite: <a href="http://www.bananadigital.xyz/" target="_blank">
                            www.bananadigital.xyz</a></p>
                            <p> Redes Sociais</p>
                              <ul style="list-style-type:none">
                                <li ><a href="https://www.youtube.com/channel/UCQxAaBFeP4Zx8fRoDgBIMwQ" target="_blank">
                                <i class="fa fa-youtube"></i> YouTube</a>
                                </li>
                                <li ><a href="https://www.facebook.com/bananadigital.inc" target="_blank">
                                <i class="fa fa-facebook fa-lg"></i> Facebook</a>
                                </li>
                                <li ><a href="https://www.linkedin.com/company/banana-digital?report%2Esuccess=6gcCQr75xprPO7XYhvjZ8J37EFZJUBSzv0j34tpx3ZPEn9V1bHBO6CQUThx6KoF16JJFVy" target="_blank">
                                <i class="fa fa-linkedin fa-lg"></i> LinkedIn</a>
                                </li>
                              </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


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
              <p>
                Em breve estará disponível no website o sistema de submissão dos resumos. </strong>.
              </p>

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
          <?php $loguser = $this->request->session ()->read ( 'Auth.User' ); ?>
            <?php if($loguser['isInscrito']) {?>
                  <p> <?= $loguser['nome'] ?> você já esta inscrito no ENTEC 2017!</p>

            <?php }else{ ?>
                  <p class="text-center">
                    Se você participou do ENTEC 2016? Apenas clique INSCREVER-SE e realize o login!
                  </p>
                  <p class="text-center">
                   <?php echo $this->Html->link(
                    '<i class="fa fa-file-excel-o fa-2x"> INSCREVER-SE</i>',
                    array('controller'=>'registrations','action'=>'register'),
                    array('class'=>'btn btn-success btn-md btn-block', 'escape' => false));?>

                  </p>
                
                <p class="text-center">
               Ñão participou da edição anterior? Crie uma conta primeiro:
                </p>

                <p class="text-center">
                   <?php echo $this->Html->link(
                  '<i class="fa fa-file-excel-o fa-2x"> Criar uma conta</i>',
                  array('controller'=>'users','action'=>'add'),
                  array('class'=>'btn btn-warning btn-md btn-block', 'escape' => false));?>
                </p>
            <?php } ?>
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
              <br>Sede Provisória Faculdade de Igarassu (Facig) – Avenida Alfredo Bandeira de Melo S/N, BR-101 Norte, Km 44, Igarassu-PE
            </p>
          </div>
        </div>
      </div>
    </div>