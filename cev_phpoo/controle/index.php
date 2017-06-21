<?php
	require_once "ControleRemoto.php";
	$c = new ControleRemoto();
	$c->ligar();
	$c->abrirMenu();
	$c->fecharMenu();
	$c->play();
	$c->pause();
	$c->desligar();
	//var_dump($c);
?>