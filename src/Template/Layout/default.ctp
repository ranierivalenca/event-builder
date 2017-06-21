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

use Cake\Core\Configure;

$cakeDescription = Configure::read('Event.name');
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset()?>
    <meta name="viewport"
    content="width=device-width, initial-scale=1.0">
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75303809-1', 'auto');
  ga('send', 'pageview');

</script>


<title>
        <?= $cakeDescription ?>
        [<?= $this->fetch('title')?>]
    </title>

   <?= $this->Html->meta ('favicon.ico','/img/favicon.ico', array ('type' => 'icon')); ?>

    <?= $this->Html->css('pingendo-bootstrap.css')?>
    <?= $this->Html->css('font-awesome.min.css')?>
    <?= $this->Html->css('base.css')?>
    <?= $this->Html->css('cake.css')?>
    <?= $this->Html->css('main.css')?>
    <?= $this->Html->script('jquery.min.js'); ?>
    <?= $this->Html->script('scrollTo/jquery.scrollTo.min.js'); ?>
    <?= $this->Html->script('bootstrap.min.js'); ?>
    <?= $this->Html->script('main.js'); ?>


    <?= $this->fetch('meta')?>
    <?= $this->fetch('css')?>
    <?= $this->fetch('script')?>
</head>
<body data-spy="scroll" data-target=".navbar">


    <!--<div class="cover" style="opacity: 1;">-->
    <div class="navbar navbar-fixed-top navbar-inverse">



        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#navbar-ex-collapse">
                    <span class="sr-only">Toggle navigation</span> <span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <?php $loguser = $this->request->session ()->read ( 'Auth.User' );?>
                <ul class="nav navbar-nav navbar-right">

                    <li>
                    <?php
                    echo $this->Html->link ( '<i class="fa fa-home fa-lg"></i>' . ' Home', ($this->fetch ( 'title' ) === 'home') ? '#home' : '/#home', array (
                            'escape' => false,
                            'id' => 'home-link'
                    ) );
                    ?>
                    </li>

                    <li>
                    <?php
                    echo $this->Html->link ( '<i class="fa fa-lg fa-list-alt"></i>' . ' Participações', ($this->fetch ( 'title' ) === 'home') ? '#attractions' : '/#attractions', array (
                            'escape' => false,
                            'id' => 'attractions-link'
                    ) );
                    ?>
                    </li>
                    
                    <li>
                    <?php
                    echo $this->Html->link ( '<i class="fa fa-lg fa-list-alt"></i>' . ' Programação', ($this->fetch ( 'title' ) === 'home') ? '#program' : '/#program', array (
                            'escape' => false,
                            'id' => 'program-link'
                    ) );
                    ?>
                    </li>
                    
                    <li>
                    <?php
                    echo $this->Html->link ( '<i class="fa fa-book fa-lg"></i>' . ' Mostra Acadêmica', ($this->fetch ( 'title' ) === 'home') ? '#academic' : '/#academic', array (
                            'escape' => false,
                            'id' => 'academic-link'
                    ) );
                    ?>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-plus" aria-hidden="true"></i>
 Atividades <span class="caret"></span></a>
                        <ul class="dropdown-menu inverse-dropdown">

                        <li>
                            <?php
                    echo $this->Html->link ( '<i class="fa fa-linux"></i>' . ' Escovando Bits', ($this->fetch ( 'title' ) === 'home') ? '#escovandobits' : '/#escovandobits', array (
                            'escape' => false,
                            'id' => 'escovandobits-link'
                    ) );
                    ?>
                        </li>
                        <li>
                            <?php
                    echo $this->Html->link ( '<i class="fa fa-hand-spock-o" aria-hidden="true"></i>' . ' Quiz Nerd', ($this->fetch ( 'title' ) === 'home') ? '#quiznerd' : '/#quiznerd', array (
                            'escape' => false,
                            'id' => 'quiznerd-link'
                    ) );
                    ?>
                        </li>
                        <li>
                            <?php
                    echo $this->Html->link ( '<i class="fa fa-paint-brush"></i>' . ' Concurso de Desenho Nerd', ($this->fetch ( 'title' ) === 'home') ? '#desenhonerd' : '/#desenhonerd', array (
                            'escape' => false,
                            'id' => 'desenhonerd-link'
                    ) );
                    ?>
                        </li>

                        <li>
                            <?php
                    echo $this->Html->link ( '<i class="fa fa-trophy"></i>' . ' Torneio LoL', ($this->fetch ( 'title' ) === 'home') ? '#torneiolol' : '/#torneiolol', array (
                            'escape' => false,
                            'id' => 'torneiolol-link'
                    ) );
                    ?>
                        </li>
                        



                      </ul>
                    </li>


                    <li>
                    <?php
                    echo $this->Html->link ( '<i class="fa fa-lg fa-pencil"></i>' . ' Inscrições', ($this->fetch ( 'title' ) === 'home') ? '#register' : '/#register', array (
                            'escape' => false,
                            'id' => 'register-link'
                    ) );
                    ?>
                    </li>
                    <li>
                    <?php
                    echo $this->Html->link ( '<i class="fa fa-lg fa-map-marker"></i>' . ' Local', ($this->fetch ( 'title' ) === 'home') ? '#where' : '/#where', array (
                            'escape' => false,
                            'id' => 'where-link'
                    ) );
                    ?>
                    </li>
                    <!--
                    <li>
                    <?php
                    echo $this->Html->link ( '<i class="fa fa-lg fa-heart"></i>' . ' Apoio', ($this->fetch ( 'title' ) === 'home') ? '#support' : '/#support', array (
                            'escape' => false,
                            'id' => 'support-link'
                    ) );
                    ?>
                    </li>
                     <li>
                    <?php
                    echo $this->Html->link ( '<i class="fa fa-group fa-lg"></i>' . ' Organização', ($this->fetch ( 'title' ) === 'home') ? '#people' : '/#people', array (
                            'escape' => false,
                            'id' => 'people-link'
                    ) );
                    ?>
                    </li> -->

                    

                    <?php
                        if ($loguser) {
                            $user = $loguser ['nome'] . ' (' . $loguser ['username'] . ') ';
                    ?>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i>
 Menu <span class="caret"></span></a>
                        <ul class="dropdown-menu inverse-dropdown">
                        <li class="dropdown-header"><?= $loguser ['username'] ?></li>

                        

                        <?php if(strpos('owner manager ', $loguser['entecrole']) !== false){?>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Administrar...</li>
                        <li>
                            <?php
                            echo $this->Html->link ( '<i class="fa fa-lg fa-linux"></i>' .' Lista Escovando Bits', array (
                                'controller' => 'proposals',
                                'action' => 'index_admin'), array('escape' => false) );
                            ?>
                        </li>

                        <li>
                            <?php
                            echo $this->Html->link ( '<i class="fa fa-lg fa-users"></i>' .' Lista Inscritos', array (
                                'controller' => 'registrations',
                                'action' => 'index'), array('escape' => false) );
                            ?>
                        </li>


                        <?php } ?>

                        <?php if(strpos('owner manager superisor', $loguser['entecrole']) !== false){?>
                        
                        
                        <li>
                            <?php
                            echo $this->Html->link ( '<i class="fa fa-lg fa-tags"></i>'.' Credenciamento', array (
                                'controller' => 'registrations',
                                'action' => 'checkin'), array('escape' => false) );
                            ?>
                        </li>

                         <li>
                            <?php
                            echo $this->Html->link ( '<i class="fa fa-graduation-cap" aria-hidden="true"></i>'.' Atividades', array (
                                'controller' => 'minicursos',
                                'action' => 'index'), array('escape' => false) );
                            ?>
                        </li>


                        <?php } ?>


                        <li role="separator" class="divider"></li>
                        <li>
                            <?php
                            echo $this->Html->link ( 'Minha Inscrição', array (
                                'controller' => 'users',
                                'action' => 'view',
                                $loguser ['id']), array('escape' => false) );
                            ?>
                        </li>

                        <li>
                        <?php
                            echo $this->Html->link ( 'Sair', array (
                                'controller' => 'users',
                                'action' => 'logout'
                            ), array ('escape' => false ) );
                        ?>
                        </li>
                        




                      </ul>
                    </li>


                        <?php } else { ?>
                        <li>
                        <?php
                            echo $this->Html->link ( '<i class="fa fa-sign-in fa-lg"></i>' . ' Entrar', array (
                                    'controller' => 'users',
                                    'action' => 'login'
                            ), array (
                                    'escape' => false
                            ) );
                        }
                        ?>

                    </li>


                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">
        <?= $this->fetch('content')?>
    </div>


    <footer class="container">
        <div class="row">
        <div class="col-sm-12">
            <hr style="height: 10px;">
            <div class="row">
                <div class="col-xs-10">
                    <h4>II ENTEC</h4>
                    <p class="small">
                        Instituto Federal de Pernambuco Campus Igarassu
                        <br><i class="fa fa-location-arrow"></i> Sede Provisória Faculdade de Igarassu (Facig) – Avenida Alfredo
                        Bandeira de Melo S/N, BR-101 Norte, Km 44, Igarassu-PE
                        <br><i class="fa fa-envelope-o"> </i> contatoentec@igarassu.ifpe.edu.br
                    </p>
                </div>
                <div class="col-xs-2">
                    <div class="row">
                        <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
<!--                            <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a> -->
<!--                            <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a> -->
                            <a target="_blank" href="https://www.facebook.com/events/433886850319944/?active_tab=discussion"><i class="fa fa-4x fa-fw fa-facebook-official"></i></a>
<!--                            <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 hidden-xs text-right">
                            <br>
<!--                            <a href="#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a> -->
<!--                            <a href="#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a> -->
                            <a target="blank" href="https://www.facebook.com/events/433886850319944/?active_tab=discussion"><i class="fa fa-4x fa-fw fa-facebook-official"></i></a>
<!--                            <a href="#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </footer>



    <script type="text/javascript">
    $(document).ready(function() {

      function registerScroll(trigger, target, time) {
        $(trigger).on("click", function(event) {
          $('body').scrollTo(target, time, "easeInOutExpo");
          event.preventDefault();
          $(this).blur();
        });
      }

      <?php
      if ($this->fetch('title') === 'home') {
      ?>
          registerScroll("#home-link",         "#home",     400);
          registerScroll("#program-link",      "#program",  400);
          registerScroll("#attractions-link",  "#attractions",  400);
          registerScroll("#academic-link",     "#academic", 400);
          registerScroll("#escovandobits-link",     "#escovandobits", 400);
          registerScroll("#where-link",        "#where",    1000);
          registerScroll("#support-link",      "#support",  1200);
          registerScroll("#people-link",       "#people",   400);
          registerScroll("#register-link",       "#register",   400);
          registerScroll("#desenhonerd-link",       "#desenhonerd",   400);
      <?php
        }
      ?>

    });
  </script>
</body>
</html>
