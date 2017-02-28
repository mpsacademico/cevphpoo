<pre>
<?php
	require_once "Mamifero.php";
	require_once "Reptil.php";
	require_once "Peixe.php";
	require_once "Canguru.php";
	
	//$a = new Animal();	
	
	$m = new Mamifero();
	$m->setPeso(10);
	$m->setIdade(8);
	$m->setMembros(4);
	$m->setCorPelo("Marrom");
	//print_r($m);
	$m->locomover();
	
	$r = new Reptil();
	//print_r($r);
	$r->locomover();
	
	$p = new Peixe();
	$p->locomover();
	
	$c = new Canguru();
	$c->locomover();
	
	$m->emitirSom();
	$r->emitirSom();
	$c->emitirSom();
	
?>
</pre>