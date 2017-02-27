<?php
	require_once "Caneta.php";
	/*
	$c1 = new Caneta();
	$c1->setModelo("Bic");
	$c1->setPonta(0.5);
	$c1->modelo = "BIC";
	//$c1->ponta = 0.4; //fatal error
	//print_r($c1);
	print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}<br>";
	*/
	$c2 = new Caneta("BIC", 0.5, "Vermelha");
	var_dump($c2);
?>