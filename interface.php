<?php
interface Pessoa {
 function getNome();
 function getIdade();
function quemSouEu();
}

class Professor implements Pessoa {
  static $profissao = "Professor";
	private $nome;
	private $idade;

  function __construct($nome,$idade){
	$this->nome = $nome;
	$this->idade = $idade;
	}

	function getNome(){
		return $this->nome;
	}

	function getIdade(){
		return $this->idade;
	}

	function quemSouEu(){
		echo "Meu nome é $this->nome, tenho $this->idade e sou ".Professor::$profissao.".\n";
	}

}

class Aluno implements Pessoa {
  static $profissao = "Aluno";
		private $nome;
	private $idade;

	function __construct($nome,$idade){
	$this->nome = $nome;
	$this->idade = $idade;
	}

	function getNome(){
		return $this->nome;
	}

	function getIdade(){
		return $this->idade;
	}

	function quemSouEu(){
		echo "Meu nome é $this->nome, tenho $this->idade e sou ".Aluno::$profissao.".\n";
	}
}


$evaldo   = new Professor('Evaldo' ,45); 
$andrea   = new Professor('Andrea',35); 
$voce     = new Aluno('Pedro',16); 
$algumcolega = new Aluno('Otto',17); 


$evaldo->quemSouEu();
$andrea->quemSouEu();
$voce->quemSouEu();
$algumcolega->quemSouEu();