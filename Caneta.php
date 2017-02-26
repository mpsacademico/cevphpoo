<?php
//definição de classe Caneta
class Caneta{
	//definição dos atributos
	public $modelo;
	public $cor;
	private $ponta;
	protected $carga;
	protected $tampada;
	//definição dos métodos
	public function rabiscar(){
		if($this->tampada == true){
			echo "Erro! Não posso rabiscar.";
		}else{
			echo "Estou rabiscando...";
		}
	}
	public function tampar(){
		$this->tampada = true;
	}
	private function destampar(){
		$this->tampada = false;
	}
}
?>