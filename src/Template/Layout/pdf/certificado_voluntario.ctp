
<style>
html{
	margin: 0px;

}
body{
	width:100%; 
	height:100%;
	left: 0px; 
	top: 0px;
	position:fixed;
	background-image: url('webroot/img/certificado_entec_2017.jpg'); 
	background-size: 100%; padding: 0px;
 	margin: 0px; 
}
#texto{
	text-align: justify;
	left: 7%;
	top: 35%;
	width: 86%;
	position:fixed;
	font-size: 26px;
	line-height: 40px;
	font-family: Calibri,sans-serif;
}


#incricao{
	
	text-align: center;
	left: 40%;
	top: 3%;
	width: 20%;
	position:fixed;
	font-size: 18px;
	font-family: Calibri,sans-serif;
}
</style>

<html >
<body>

<div id="incricao">
Código Nº <b><?= $registration['event_id'] ?> / <?= $registration->user['id'] ?></b>
</div>

<div id="texto">

Certificamos que <b><?= $registration->user['nome'] ?></b> participou como voluntário na organização do evento II Encontro de Tecnologia da Informação do IFPE, com carga horária de 20 horas de trabalho, realizado nos dias 21 e 22 de junho de 2017, promovido pelo Instituto Federal de Pernambuco - <i>Campus</i> Igarassu.


</div>
</body>
</html>