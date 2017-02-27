<?php
require_once "Lutador.php";
class Luta{
	
	private $desafiado;
	private $desafiante;	
	private $rounds;
	private $aprovada;
		
	public function marcarLuta($l1, $l2){
		if($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)){
			$this->aprovada = true;
			$this->desafiante = $l2;
			$this->desafiado = $l1;
		}else{
			$this->aprovada = false;
			$this->desafiante = null;
			$this->desafiado = null;
			echo "Lutadores inválidos!<br>";
		}
	}
	
	public function lutar(){
		if($this->aprovada){
			$this->desafiado->apresentar();
			$this->desafiante->apresentar();
			$vencedor = rand(0, 2);
			echo '<div style="background-color:#27ae60;color:white;padding:10px">';
			switch($vencedor){
				case 0:
					echo "Empate!!!<br>";
					$this->desafiado->empatarLuta();
					$this->desafiante->empatarLuta();
					break;
				case 1:
					echo $this->desafiado->getNome()." venceu!<br>";
					$this->desafiado->ganharLuta();
					$this->desafiante->perderLuta();
					break;
				case 2:
					echo $this->desafiante->getNome()." venceu!<br>";
					$this->desafiante->ganharLuta();
					$this->desafiado->perderLuta();
					break;
			}
			echo "</div>";
		}else{
			echo "Luta não aprovada!<br>";
		}
	}
	
	public function getDesafiado(){
		return $this->desafiado;
	}

	public function setDesafiado($desafiado){
		$this->desafiado = $desafiado;
	}

	public function getDesafiante(){
		return $this->desafiante;
	}

	public function setDesafiante($desafiante){
		$this->desafiante = $desafiante;
	}

	public function getRounds(){
		return $this->rounds;
	}

	public function setRounds($rounds){
		$this->rounds = $rounds;
	}

	public function getAprovada(){
		return $this->aprovada;
	}

	public function setAprovada($aprovada){
		$this->aprovada = $aprovada;
	}
	
}
?>