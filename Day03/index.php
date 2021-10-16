<?php

use Alura\Imersao\Modelo\Validacoes;

require_once 'autoload.php';
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <title>Dia 03 - Imersão</title>
</head>
<body>
    <div class='container'>
        <h2> Mentalista </h2>
        <img src="https://www.alura.com.br/assets/img/imersoes/dev-2021/logo-imersao-mentalista.svg" class="page-logo" alt=""><br>
        <h2>Digite um número de 0 a 10</h2>
        <!-- Campo para colocar o número de tentativas restantes -->
        <form method="POST" action="">
            <input type='number' class='form-input' name="numero" placeholder="Número de 0 a 10" required><br>
            </br><button type='submit' class='form-submit-button' name="enviar">Chutar</button>
            </br>
            <?php
            //Tentar encaixar o código php aqui
            if(!isset($_SESSION['tentativas'])){
                $_SESSION['tentativas'] = 1;
                $_SESSION['numeroSorteado'] = random_int(0, 10);
            }
            if(isset($_POST['numero'])){
                $validacoes = new Validacoes($_POST['numero']);
                echo "Para reiniciar o jogo digite -1";
                $validacoes->validar();
            }
            ?>
        </form>
    </div>
</body>
</html>