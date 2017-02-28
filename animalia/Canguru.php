<?php
require_once "Mamifero.php";
class Canguru extends Mamifero{
	
	private $bebeNaBolsa;
	
	public function __construct($bnb){
		$this->bebeNaBolsa = $bnb;
	}
	
	//PHP não suporta o POLIMORFISMO de SOBRECARGA?!
	
	public function locomover(){
		echo "Pulando<br>";
	}
	
	public function locomoverComBebe($bnb){
		echo "Pulando devagar, por causa do bebê!<br>";
	}
	
}
?>