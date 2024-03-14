<?php

class peritrian {
public $ladoa;
public $ladob;
public $ladoc;


function calculaPerimetro(){
$perimetro = $this->ladoa + $this->ladob + $this->ladoc;
echo " Perímetro do triângulo = $perimetro.";

  }
	function __construct($ladoa, $ladob , $ladoc){
		$this->ladoa = $ladoa;
		$this->ladob = $ladob;
		$this->ladoc = $ladoc;
	}

}


$peri = new peritrian(5,2,3);
$peri->calculaPerimetro();

class triangulo {
public $base;
public $altura;


function calculaArea(){
$area = $this->base * $this->altura / 2 ;
echo " Área do triângulo = $area.";

  }
	function __construct($base, $altura){
		$this->base = $base;
		$this->altura = $altura;
	}

}

$tri = new Triangulo(4,3);
$tri->calculaArea() ;





class Perimetroretangulo {
public $lado1;
public $lado2;

function calculaPerimetroretangulo(){
	$peri = $this->lado1 * 2 + $this->lado2 * 2 ;
	echo " Perímetro do retangulo = $peri.";
}
function __construct($lado1, $lado2){
	$this->lado1 = $lado1;
	$this->lado2 = $lado2;
}

}

$retangulo = new Perimetroretangulo (10,4);
$retangulo->calculaPerimetroretangulo();


class arearetangulo{
public $comprimento;
public $largura;

function calculaArearetangulo(){
	$arearetan = $this->comprimento * $this->largura;
	echo " Área do quadrado = $arearetan.";
}
function __construct($comprimento, $largura){
    $this->comprimento = $comprimento;
		$this->largura = $largura;
}

}

$arearetangu = new arearetangulo(10,4);
$arearetangu->calculaArearetangulo();

?>