<?php
require_once "Animal.php";
class Mamifero extends Animal{
	
	private $corPelo;	
	
	function locomover(){
		echo "Correndo<br>";
	}
	function alimentar(){
		echo "Mamando<br>";
	}	
	function emitirSom(){
		echo "Som de mamífero<br>";
	}
	
	public function getCorPelo(){
		return $this->corPelo;
	}

	public function setCorPelo($corPelo){
		$this->corPelo = $corPelo;
	}
	
}
?>