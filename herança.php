<?php
class Calculadora{
protected $op1;
protected $op2;
protected $res;

 function __construct ($op1,$op2){
$this->op1 = $op1;
$this->op2 = $op2;
 }

  function soma(){
$this->res = $this->op1 + $this->op2;
echo "a soma é : $this->res\n";
  }

  function subtracao(){
$this->res = $this->op1 - $this->op2;
echo "A subtração é : $this->res\n";
  }

}

class CalculaMax extends Calculadora{

  function dividir(){
$this->res = $this->op1 / $this->op2;	
echo "A divisão é : $this->res\n";
  } 

  function multiplicar(){
$this->res = $this->op1 * $this->op2;	
echo "A multiplicação é : $this->res\n";
	}
}


$calcula = new Calculadora(2,5);
$calcula->soma();
$calcula->subtracao();
$calculadora2 = new CalculaMax(1,20);
$calculadora2->multiplicar();
$calculadora2->dividir();
