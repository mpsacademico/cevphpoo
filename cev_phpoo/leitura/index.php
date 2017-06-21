<?php
	require_once "Pessoa.php";
	require_once "Livro.php";
	$p = new Pessoa();
	$p->setNome("Jeronius");
	$p->setIdade(21);
	$p->setSexo("M");
	$p->fazerAniver();
	//var_dump($p);
	$l = new Livro();
	$l->setTitulo("O Expresso do Oriente");
	$l->setAutor("Graham Greene");
	$l->setTotPaginas(207);
	$l->setLeitor($p);
	$l->detalhes();
	$l->abrir();
	$l->avancarPag();
	$l->avancarPag();
	$l->voltarPag();
	$l->folhear(10);
	$l->fechar();	
?>