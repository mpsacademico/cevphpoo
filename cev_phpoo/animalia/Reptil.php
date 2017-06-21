<?php
require_once "Animal.php";
class Reptil extends Animal{
	
	private $corEscama;	
	
	function locomover(){
		echo "Rastejando<br>";
	}
	function alimentar(){
		echo "Comendo vegetais<br>";
	}	
	function emitirSom(){
		echo "Som de réptil<br>";
	}
	
	public function getCorEscama(){
		return $this->corEscama;
	}

	public function setCorEscama($corEscama){
		$this->corEscama = $corEscama;
	}
	
}
?>