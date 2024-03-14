<?php
    class bola {
        public $tipo;
        public $marca;
	    public $cor;
	    public $preco;

	public function estiloBola(){
		echo "A bola de ".$this->tipo." da marca ".$this->marca." é da cor ".$this->cor." do preço de ". $this->preco;
		
	}

}


$bola1 = new bola();
$bola1 ->tipo = "Futebol";
$bola1 ->marca = "Nike" ;
$bola1 ->cor = "preta com branco";
$bola1 ->preco = "R$50,00. \n";

$bola2 = new bola();
$bola2 ->tipo = "Tenis";
$bola2 ->marca ="Wilson";
$bola2 ->cor = "verde";
$bola2 ->preco = "R$70,00. \n";

$bola3 = new bola();
$bola3 ->tipo = "Volei";
$bola3 ->marca ="Mikasa";
$bola3 ->cor = "amarela com azul";
$bola3 ->preco = "R$60,00. \n";

$bola4 = new bola();
$bola4 ->tipo = "Basquete";
$bola4 ->marca ="Spalding NBA";
$bola4 ->cor = "laranja";
$bola4 ->preco = "R$100,00. \n";


$bola1 ->estiloBola();
$bola2 ->estiloBola();
$bola3 ->estiloBola();
$bola4 ->estiloBola();

 ?>