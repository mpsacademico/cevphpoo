<?php

class Lutador{
	
	private $nome;
	private $nacionalidade;
	private $idade, $altura, $peso;
	private $categoria;
	private $vitorias, $derrotas, $empates;
	
	function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
		$this->nome = $nome;
		$this->nacionalidade = $nacionalidade;
		$this->idade = $idade;
		$this->altura = $altura;
		$this->setPeso($peso);		
		$this->vitorias = $vitorias;
		$this->derrotas = $derrotas;
		$this->empates = $empates;
	}
	
	function apresentar(){
		echo '<div style="background-color:#2c3e50;color:#e74c3c;padding:10px">';
		echo "<h4>Apresentação</h4>";
		echo "<h2>Chegou a hora! O lutador {$this->getNome()} que veio diretamente de {$this->getNacionalidade()} vai lutar!</h2>";
		echo '<p></p>';
		echo '</div>';
	}
	
	function status(){
		echo '<div style="background-color:#ecf0f1;color:#e74c3c;padding:10px"">';
		echo "<h4>Status</h4>";
		echo "<p>Nome: {$this->getNome()}</p>";
		echo "<p>Categoria: {$this->getCategoria()}</p>";
		echo "<p>Vitórias: {$this->getVitorias()}</p>";
		echo "<p>Derrotas: {$this->getDerrotas()}</p>";
		echo "<p>Empates: {$this->getEmpates()}</p>";
		echo '</div>';
	}
	
	function ganharLuta(){
		$this->setVitorias($this->getVitorias()+1);
	}
	
	function perderLuta(){
		$this->setDerrotas($this->getDerrotas()+1);
	}
	
	function empatarLuta(){
		$this->setEmpates($this->getEmpates()+1);
	}
	
	function ver(){
		echo "<pre>";
		var_dump($this);
		echo "</pre>";
	}
	
	//métodos acessores e os métodos modificadores
	
	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNacionalidade(){
		return $this->nacionalidade;
	}

	public function setNacionalidade($nacionalidade){
		$this->nacionalidade = $nacionalidade;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function setIdade($idade){
		$this->idade = $idade;
	}

	public function getAltura(){
		return $this->altura;
	}

	public function setAltura($altura){
		$this->altura = $altura;
	}

	public function getPeso(){
		return $this->peso;
	}

	public function setPeso($peso){
		$this->peso = $peso;
		$this->setCategoria();
	}

	public function getCategoria(){
		return $this->categoria;
	}

	private function setCategoria(){
		$peso = $this->getPeso();
		if($peso < 52.2){
			$this->categoria = "Inválido";
		}elseif($peso <= 70.3){
			$this->categoria = "Leve";
		}elseif($peso <= 83.9){
			$this->categoria = "Médio";
		}elseif($peso <= 120.2){
			$this->categoria = "Pesado";
		}else{
			$this->categoria = "Inválido";
		}
	}

	public function getVitorias(){
		return $this->vitorias;
	}

	public function setVitorias($vitorias){
		$this->vitorias = $vitorias;
	}

	public function getDerrotas(){
		return $this->derrotas;
	}

	public function setDerrotas($derrotas){
		$this->derrotas = $derrotas;
	}

	public function getEmpates(){
		return $this->empates;
	}

	public function setEmpates($empates){
		$this->empates = $empates;
	}
	
}
?>