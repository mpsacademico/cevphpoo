<pre>
<?php
	require_once "ContaBanco.php";
	
	$p1 = new ContaBanco();
	$p2 = new ContaBanco();
	
	$p1->abrirConta("CC");
	$p1->setDono("Jubileu");	
	$p2->abrirConta("CP");
	$p2->setDono("Creuza");
	
	$p1->depositar(300);
	$p2->depositar(500);
	
	$p1->pagarMensal();
	$p2->pagarMensal();
	
	$p1->sacar(338);
	$p2->sacar(630);
	
	$p1->fecharConta();
	$p2->fecharConta();
	
	var_dump($p1);
	var_dump($p2);
?>
</pre>