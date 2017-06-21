<h1>UEC</h1>
<?php
	require_once "Lutador.php";
	require_once "Luta.php";
	//criação de lutadores
	$l1 = new Lutador("Julius", "Brasil", "89", "1.65", 80, 0, 0, 0);		
	$l2 = new Lutador("Rasmus", "Noruega", "79", "1.75", 80, 0, 0, 0);	
	$l3 = new Lutador("Marcius", "Brasil", "89", "1.65", 80, 0, 0, 0);		
	$l4 = new Lutador("Tantreus", "Noruega", "79", "1.75", 80, 0, 0, 0);
	//primeira luta
	$uec1 = new Luta();
	$uec1->marcarLuta($l1, $l2);
	$uec1->lutar();
	$uec1->getDesafiado()->status();
	$uec1->getDesafiante()->status();
	//segunda luta
	$uec2 = new Luta();
	$uec2->marcarLuta($l3, $l4);
	$uec2->lutar();
	$uec2->getDesafiado()->status();
	$uec2->getDesafiante()->status();
	//terceira luta
	$uec3 = new Luta();
	$uec3->marcarLuta($l1, $l4);
	$uec3->lutar();
	$uec3->getDesafiado()->status();
	$uec3->getDesafiante()->status();
?>