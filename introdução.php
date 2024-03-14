<?php
class aluno {
    public $nome;
    public $idade;
	public $curso;

	public function chamada(){
		echo "$this->nome $this->idade $this->curso";
	}

}


$aluno1 = new aluno();
$aluno1 ->nome = "Pedro";
$aluno1 ->idade =  "16" ;
$aluno1 ->curso = "DS,";

$aluno2 = new aluno();
$aluno2 ->nome = " Livia";
$aluno2 ->idade ="15";
$aluno2 ->curso = "ADM,";

$aluno3 = new aluno();
$aluno3 ->nome = " João";
$aluno3 ->idade ="17";
$aluno3 ->curso = "MB,";

$aluno4 = new aluno();
$aluno4 ->nome = " Annye";
$aluno4 ->idade ="14";
$aluno4 ->curso = "Química.";


$aluno1 ->chamada();
$aluno2 ->chamada();
$aluno3 ->chamada();
$aluno4 ->chamada();

?>