<?php
abstract class Pessoa{ //não pode ser diretamente instaciada
	
	private $nome;
	private $idade;	
	private $sexo;
	
	public function __construct(){
		echo "Uma nova pessoa foi criada!<br>";		
	}
		
	public function fazerAniver(){
		$this->setIdade($this->getIdade()+1);
	}
	
	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getIdade(){
		return $this->idade;
	}

	public function setIdade($idade){
		$this->idade = $idade;
	}

	public function getSexo(){
		return $this->sexo;
	}

	public function setSexo($sexo){
		$this->sexo = $sexo;
	}
	
}
?>