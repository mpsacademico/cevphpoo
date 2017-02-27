<pre>
<?php
	require_once "Aluno.php";
	require_once "Professor.php";
	
	$p = new Pessoa();
	
	$a = new Aluno();
	$a->setNome("Marcos");
	$a->cancelarMatr();
	
	$prof = new Professor();
	$prof->salario = 5000;
	echo "Salário do professor é de {$prof->salario}.<br>";
	
	//são herdados todos os atributos e métodos
	
	print_r($a);
	print_r(get_class_methods($a));	
	
	print_r($prof);
	print_r(get_class_methods($prof));	
?>
</pre>