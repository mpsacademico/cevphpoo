<?php
//definição de classe Caneta
class Caneta{
	//definição dos atributos
	var $modelo;
	var $cor;
	var $ponta;
	var $carga;
	var $tampada;
	//definição dos métodos
	function rabiscar(){
		if($this->tampada == true){
			echo "Erro! Não posso rabiscar.";
		}else{
			echo "Estou rabiscando...";
		}
	}
	function tampar(){
		$this->tampada = true;
	}
	function destampar(){
		$this->tampada = false;
	}
}
?>