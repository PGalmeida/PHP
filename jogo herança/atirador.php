<?php   
require_once('personagem.php');
class Atirador extends personagem{
  function mensagemNasceu(){
    echo "Cadê minha shotgun, por que to com sede de sangue. ▄︻┻┳═一 \n";
  }
  function mensagemMorreu(){
    echo "Eu falhei na minha missão.  (ᴗ ͜ʖ ᴗ) \n
		▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄▄  
		████▌▄▌▄▐▐▌█████  
		████▌▄▌▄▐▐▌▀████  
		▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀▀  
		\n";
  }
  function mensagemVenceu(){
    echo "Exterminador do futuro winner. \n
		Hasta La vista, baby.   \n
	----_lll___________________._.
---/____________\____/______l]
--/__==O__________________/
---),---.(_\(_) /
--//_*_),------
-//_*_//
//_*_// 			
	  \n	";
  }
}