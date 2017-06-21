<?php
require_once "Controlador.php";

//classe implementando a interface controlador
class ControleRemoto implements Controlador{
	
	private $volume;
	private $ligado;
	private $tocando;
	
	public function __construct(){
		$this->volume = 50;
		$this->ligado = false;
		$this->tocando = false;
	}
	
	//implementação dos métodos da interface
	
	public function ligar(){
		echo "Ligado<br>";
	}
	
	public function desligar(){
		echo "Desligado<br>";
	}
	
	public function abrirMenu(){
		echo "Menu aberto<br>";
	}
	
	public function fecharMenu(){
		echo "Fechar menu<br>";
	}
	
	public function play(){
		echo "PLAY<br>";
	}
	
	public function pause(){
		echo "PAUSE<br>";
	}	
	
	//métodos acessores e modificadores dos atributos
	
	public function getVolume(){
		return $this->volume;
	}

	public function setVolume($volume){
		$this->volume = $volume;
	}

	public function getLigado(){
		return $this->ligado;
	}

	public function setLigado($ligado){
		$this->ligado = $ligado;
	}

	public function getTocando(){
		return $this->tocando;
	}

	public function setTocando($tocando){
		$this->tocando = $tocando;
	}
	
}
?>