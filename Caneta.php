<?php
class Caneta{	
	public $modelo;	
	private $ponta;
	private $cor;
	
	/*public function __construct(){
		$this->cor = "Azul";
	}*/
	
	public function Caneta($m, $p, $c){
		$this->modelo = $m;
		$this->ponta = $p;
		$this->c = $c;
		$this->tampar();
	}
	
	public function tampar(){
		$this->tampada = true; //atributo implícito
	}
	
	public function getModelo(){
		return $this->modelo;
	}
	public function setModelo($m){
		$this->modelo = $m;
	}
	public function getPonta(){
		return $this->ponta;
	}
	public function setPonta($p){
		$this->ponta = $p;
	}
}
?>