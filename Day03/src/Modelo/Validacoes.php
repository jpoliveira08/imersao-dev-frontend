<?php

namespace Alura\Imersao\Modelo;

class Validacoes
{
     private int $numeroRecebido;
     public function __construct(int $numeroRecebido)
     {
          $this->numeroRecebido = $numeroRecebido;
     }

     public function validar()
     {
          if($_SESSION["numeroSorteado"] == $this->numeroRecebido) // Caso o usuário acerte o número
          {
               echo "<br /><p align = 'center'>Parabéns, você acertou!</b><br />Você tentou <b>" .  $_SESSION['tentativas'] . "</b> vezes<br />";
               
               unset($_SESSION['numeroSorteado']);
               session_destroy();
          }
          else if($this->numeroRecebido > $_SESSION['numeroSorteado']){
               echo "<br /><p align = 'center'>Tente um número menor...</p>";
			echo "<h2 align = \"center\">Tentativas Restantes: <font color = \"white\" size = \"30\">" . (10-$_SESSION['tentativas']) . "</font></h2>";
          }
          else{
               echo "<br /><p align = 'center'>Tente um número maior...</p>";
			echo "<h2 align = \"center\">Tentativas Restantes: <font color = \"white\" size = \"30\">" . (10-$_SESSION['tentativas']) . "</font></h2>";
          }
          $_SESSION['tentativas']++;
          
          if($_SESSION['tentativas'] == 11 || $this->numeroRecebido == -1){
               header('Location: index.php');
               unset($_SESSION['numeroSorteado']);
               session_destroy();
          } 
     }
}