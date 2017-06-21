<?php
class ContaBanco{
	
	public $numConta;
	protected $tipo;
	private $dono;
	private $saldo;
	private $status;
	
	public function __construct(){		
		$this->setSaldo(0);
		$this->setStatus(false);
		echo "Conta criada com sucesso<br>";
	}
	
	public function abrirConta($t){
		$this->setTipo($t);
		$this->setStatus(true);
		if($t == "CC"){
			$this->setSaldo(50); //priorizar os métodos especiais		
		}elseif($t == "CP"){
			$this->saldo = 150; //evitar esse uso?!
		}
	}
	
	public function fecharConta(){
		if($this->getSaldo()>0){
			echo "Conta ainda tem dinheiro. Não é possível fechar.<br>";
		}elseif($this->getSaldo()<0){
			echo "Conta está em débito. Não é possível fechar.<br>";
		}else{
			$this->setStatus(false);
		}
	}
	
	public function depositar($v){
		if($this->getStatus()){
			$this->setSaldo($this->getSaldo()+$v);
		}else{
			echo "Conta fechada. Não é possível depositar.<br>";
		}
	}
	
	public function sacar($v){
		if($this->getStatus()){
			if($this->getSaldo()>=$v){
				$this->setSaldo($this->getSaldo()-$v);
			}else{	
				echo "Saldo insuficente para saque.<br>";
			}
		}else{
			echo "Conta fechada. Não é possível sacar.<br>";
		}
	}
	
	public function pagarMensal(){
		if($this->getTipo() == "CC"){
			$v = 12;
		}elseif($this->getTipo() == "CP"){
			$v = 20;
		}
		if($this->getStatus()){
			$this->setSaldo($this->getSaldo()-$v);
		}else{
			echo "Problemas com a conta.<br>";
		}
	}
	
	public function getTipo(){
		return $this->tipo;
	}
	public function setTipo($tipo){
		$this->tipo = $tipo;
	}

	public function getDono(){
		return $this->dono;
	}
	public function setDono($dono){
		$this->dono = $dono;
	}
	
	public function getSaldo(){
		return $this->saldo;
	}
	public function setSaldo($saldo){
		$this->saldo = $saldo;
	}
		
	public function getStatus(){
		return $this->status;
	}
	public function setStatus($status){
		$this->status = $status;
	}
		
}
?>