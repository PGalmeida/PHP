<?php   
require_once('personagem.php');
class Arqueiro extends personagem{
  function mensagemNasceu(){
    echo "Pelo meu arco! \n";
  }
  function mensagemMorreu(){
    echo "Retorno a natureza! \n";
  }
  function mensagemVenceu(){
    echo "A vitória é minha!";
  }
}