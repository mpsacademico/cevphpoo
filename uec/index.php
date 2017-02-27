<h1>UEC</h1>
<?php
	require_once "Lutador.php";
	$l = new Lutador("Julius", "Brasil", "89", "1.65", 60, 10, 2, 3);	
	$l->apresentar();
	$l->status();
	//$l->ver();
	$l = new Lutador("Rasmus", "Noruega", "79", "1.75", 80, 11, 1, 4);	
	$l->apresentar();
	$l->status();
?>