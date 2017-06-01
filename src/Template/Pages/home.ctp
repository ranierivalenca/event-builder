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

if (!Configure::read('debug')):
  throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

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
    

    <div id="academic" class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-justify">
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
                  <li><strong>9 de Junho</strong> - Fim do prazo para entrega dos resumos</li>
                  <li><strong>14 de Junho</strong> - Divulgação dos trabalhos aceitos</li>
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
          <h2 class="text-center">INSCRIÇÕES ABERTAS!</h2>
          <div class="col-md-8 col-md-offset-2 text-center">
            
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
           Não participou da edição anterior? Crie uma conta primeiro:
            </p>

            <p class="text-center">
               <?php echo $this->Html->link(
              '<i class="fa fa-file-excel-o fa-2x"> Criar uma conta</i>',
              array('controller'=>'users','action'=>'add'),
              array('class'=>'btn btn-warning btn-md btn-block', 'escape' => false));?>
            </p>
          </div>
        </div>
       
      </div>
    </div>
     


    <div id="where" class="section" >
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