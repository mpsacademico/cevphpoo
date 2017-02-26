<pre>
<?php
	require_once "Caneta.php";
	$c1 = new Caneta;
	$c1->modelo = "BIC cristal";
	$c1->cor = "Vermelha";
	//$c1->ponta = 0.5; //gera um erro devido a visibilidade privada do atributo ponta
	//$c1->tampada = true;
	$c1->tampar(); //usar um método público para acessar uma atributo privado ou protegido
	var_dump($c1);
?>
</pre>