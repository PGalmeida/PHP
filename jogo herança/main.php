<?php

require('personagem.php');
require('magao.php');
require('feiticeira.php');
require('chapolin.php');
require('arqueiro.php');
require('atirador.php');

$players = [new Magao('Magão'),new Chapolin("Chapolin"),new Feiticeira("feiticeira"),new Arqueiro("Arqueiro"),new Atirador('Exterminador do Futuro')];

$max = count($players);


function venceu($players){
  if (count($players)==1) {
    $players[0]->vitoria();
    return true;
  } else
    return false;
     
     


}

function vivos($players){
  $vivos = [];
  $max = count($players);
  for($v=0;$v<$max;$v++){
    if (!$players[$v]->estaMorto())
       array_push($vivos, $players[$v]);
  }
  return $vivos;
}

while(!venceu($players))   {
  $max = count($players)-1;
  $p1 = 0;
  $p2 = 0;
  while($p1==$p2) {
   $p1 = rand(0,$max);
   $p2 = rand(0,$max);
  }
  echo "$p1 $p2";
  $tiro = rand(0,10);
  $players[$p1]->atira($tiro,$players[$p2]);
  $players = vivos($players);
  $p1 = 0;
  $p2 = 0;  
}

