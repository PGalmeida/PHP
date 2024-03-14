<?php   
require_once('personagem.php');
class Chapolin extends personagem{
  function mensagemNasceu(){
    echo "█▬▬ Não contavam com a minha astúcia! ▬▬█ \n";
  }
  function mensagemMorreu(){
    echo "█▬▬ Prefiro morrer do que perder a vida! ▬▬█ \n";
  }
  function mensagemVenceu(){
    echo "█▬▬ Chapolin VENCEU ▬▬█ \n Todos os meus movimentos são friamente calculados";
  }
}
