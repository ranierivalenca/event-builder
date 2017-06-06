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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
<head>
    <title><?= $this->fetch('title') ?></title>
</head>
<body>
<p>Olá <?= $nome ?>,</p>


<p>o seu artigo foi enviado com sucesso e está pendente de avaliação.</p>
<ul>
	<li> <strong>ID: </strong> <?= $paper->id ?> </li>
	<li> <strong>Título: </strong> <?= $paper->title ?> </li>
	<li> <strong>Data Envio: </strong> <?= $paper->modified ?> </li>
</ul>

<p>Obrigado por participar da Mostra Acadêmica do ENTEC 2017 e contribuir com o sucesso do evento!</p>
<p>Fique atento à programação da Mostra Acadêmica em: entec.ifpe.edu.br/#academic</p>
<br>
<hr style="border:none;color:#909090;background-color:#b0b0b0;min-height:1px;width:99%">
<p>II Encontro de Tecnologia da Informação do IFPE - EnTec 2017
<br>Dias 21 e 21 de junho de 2017
<br>Igarassu - PE
<br>http://entec.ifpe.edu.br<p>
</body>
</html>
