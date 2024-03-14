<?php

class Usuario{
  public $nome ="";
  private $senha;
  
  function validar($nome,$senha){
    if ($this->senha==$senha && $this->nome==$nome) {
      echo "Usuário válido!\n";
    }else
    echo "Usuário inválido!\n";
  }

  public function __construct($nome,$senha){
    $this->nome = $nome;
    $this->senha = $senha;
  }

  function __destruct(){
    echo "$this->nome foi destruído.";
  }

}

$user1 = new Usuario("Pedro","1010");

$user1->validar("Pedro","1010");