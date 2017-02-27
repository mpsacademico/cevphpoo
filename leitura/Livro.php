<?php
require_once "Pessoa.php";
require_once "Publicacao.php";
class Livro implements Publicacao{
	
	private $titulo;
	private $autor;
	private $totPaginas;
	private $pagAtual;
	private $aberto;
	private $leitor;
	
	public function detalhes(){
		echo "<h1>Livro sendo lido por ".$this->getLeitor()->getNome()."</h1>";
		echo "<pre>";		
		var_dump($this);		
		echo "</pre>";
	}	
	
	//implementação dos da interface	
	public function abrir(){
		echo "Abrir \"".$this->getTitulo()."\"<br>";
	}
	public function fechar(){
		echo "Fechar \"".$this->getTitulo()."\"<br>";
	}	
	public function folhear($pag){
		echo "Folhear para ".$pag."<br>";
	}
	public function avancarPag(){
		echo "Avançar página!<br>";
	}
	public function voltarPag(){
		echo "Voltar página!<br>";
	}	
	
	//getters e setters
	public function getTitulo(){
		return $this->titulo;
	}

	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}

	public function getAutor(){
		return $this->autor;
	}

	public function setAutor($autor){
		$this->autor = $autor;
	}

	public function getTotPaginas(){
		return $this->totPaginas;
	}

	public function setTotPaginas($totPaginas){
		$this->totPaginas = $totPaginas;
	}

	public function getPagAtual(){
		return $this->pagAtual;
	}

	public function setPagAtual($pagAtual){
		$this->pagAtual = $pagAtual;
	}

	public function getAberto(){
		return $this->aberto;
	}

	public function setAberto($aberto){
		$this->aberto = $aberto;
	}

	public function getLeitor(){
		return $this->leitor;
	}

	public function setLeitor($leitor){
		$this->leitor = $leitor;
	}
	
}
?>