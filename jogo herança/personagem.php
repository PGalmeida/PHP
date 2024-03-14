<?php
abstract class Personagem {
  protected $nome;
  private $vida = 100;
  private $energia = 100;

  abstract function mensagemNasceu();
  abstract function mensagemMorreu();  
  function mensagemVenceu(){
    echo "$this->nome VENCEU!";
  }

  function getEnergia(){
    return $this->energia;
  }

  function __construct($nome) {
    $this->nome = $nome;
    $this->mensagemNasceu();
  }

  function estaMorto(){
    return $this->vida==0;
  }

  function vitima($dano,$personagem){
    if ($this->vida>$dano) {
       $this->vida -= $dano; 
    } else {
       $this->vida = 0;
    }

    if ($this->vida==0)
      $this->mensagemMorreu();


    $personagem->energia -= $dano;
    $this->imprimeStatus();
    $personagem->imprimeStatus();

  }


  function vitoria(){
    $this->mensagemVenceu();
  }

  
  function atira($tiro, Personagem $personagem){
      echo "$this->nome Atirou em $personagem->nome \n";
      if ($tiro<$this->energia) {
         $personagem->vitima($tiro,$this);
      } else if ($this->energia>0) {
        $personagem->vitima($this->energia,$this);
      } else {
        // se tentar atirar e não tiver energia
        // a vitima ganha o tiro em energia
        $personagem->recupera($tiro); 
        echo "$this->nome SEM ENERGIA \n";
      }
      
  }

  function recupera($tiro){
    $this->energia += $tiro;
  }

  function imprimeStatus(){
    if ($this->vida==0){
      echo "****** $this->nome Está Morto ******\n";
    }else 
      echo "Nome:$this->nome \n Vida: $this->vida \n Energia: $this->energia \n";
    
  }

}

