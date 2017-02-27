<?php
require_once "Pessoa.php";
class Aluno extends Pessoa{
	
	private $matr;
	private $curso;
	
	public function __construct(){
		echo "Um novo aluno foi criado!<br>";
	}
	
	public function cancelarMatr(){
		echo "A matrícula será cancelada!<br>";
	}
	
	public function getMatr(){
		return $this->matr;
	}

	public function setMatr($matr){
		$this->matr = $matr;
	}

	public function getCurso(){
		return $this->curso;
	}

	public function setCurso($curso){
		$this->curso = $curso;
	}
	
}
?>