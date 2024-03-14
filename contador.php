<?php
class Contador {
  private $contador = 0;

	function __construct(){
		$this->contador = 0;
		$this->imprimir();
	}

  public function mais(){
    $this->contador++;
		$this->imprimir();
	}

public function menos(){
	if ($this->contador > 0)
    $this->contador--;
		$this->imprimir();
	}	

	public function zerar(){
    $this->contador = 0;
	}	

	public function imprimir(){
    echo"Contador $this->contador \n";
	}	

	function __destruct(){
    echo "Contador terminou em $this->contador";
	}	
}

$contador = new Contador();
$contador->mais();
$contador->mais();
$contador->mais();
$contador->mais();
$contador->mais();
$contador->mais();
$contador->menos();
$contador->menos();
$contador->menos();
$contador->menos();
$contador->mais();
$contador->mais();
$contador->mais();
$contador->mais();
$contador->menos();