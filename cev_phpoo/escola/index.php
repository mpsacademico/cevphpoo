<pre>
<?php
	require_once "Aluno.php";
	require_once "Professor.php";
	require_once "Visitante.php";
	require_once "Bolsista.php";
	
	//$p = new Pessoa(); //Pessoa é uma classe abstrata
	
	$a = new Aluno();
	$a->setNome("Marcos");
	$a->pagarMensal();
	$a->cancelarMatr();
	
	$prof = new Professor();
	$prof->salario = 5000;
	echo "Salário do professor é de {$prof->salario}.<br>";
	
	$vis = new Visitante();
	$vis->setNome("Juvenal");
	
	$bol = new Bolsista();
	$bol->setNome("Amanda");	
	$bol->setCurso("Biologia");
	$bol->pagarMensal();
	
	//print_r($bol);
?>
</pre>