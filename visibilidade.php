<?php

class Dividir{
public $divisor = 0.0;
public $dividendo = 0.0;


function atribuirDividendo($dividendo){
	if ($dividendo==0) {
		echo"Não existe divisão por zero!";
	}else
	$this->dividendo = $dividendo;
}

function calcula(){
$resultado = $this->divisor / $this->dividendo;
}

function imprimir() {
	echo "O Resultado da divisão é = $resultado";
}

}

$calc = new Dividir();
$calc->divisor = 10.0;
$calc->atribuirDividendo(2.0);
$calc->calcula();
$calc->imprimir();


?>