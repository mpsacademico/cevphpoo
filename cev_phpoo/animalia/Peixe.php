<?php
require_once "Animal.php";
class Peixe extends Animal{
	
	private $corEscama;	
	
	function locomover(){
		echo "Nadando<br>";
	}
	function alimentar(){
		echo "Comendo substâncias<br>";
	}	
	public function emitirSom(){
		//peixe não faz som
	}
	
	function soltarBolha(){
		echo "Soltou uma bolha<br>";
	}
	
	public function getCorEscama(){
		return $this->corEscama;
	}

	public function setCorEscama($corEscama){
		$this->corEscama = $corEscama;
	}
	
}
?>