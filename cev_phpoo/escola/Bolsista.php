<?php
require_once "Aluno.php";
final class Bolsista extends Aluno{ //não pode ter filhos - classe estéril
	
	//esse método sobrepõe o pagamento da superclasse Aluno
	public function pagarMensal(){
		echo "Bolsistas não pagam!!!<br>";
	}
	
	//não é possível sobrescrever um método final
	/*public function cancelarMatr(){
		echo "A matrícula será cancelada!<br>";
	}*/
	
}
?>