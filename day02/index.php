<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
  body {
    font-family: "Roboto Mono", monospace;
    background-image: linear-gradient(to bottom, #DCE35B, #45B649);
    background-attachment: fixed;
  }
  .page-logo {
    width: 200px;
    filter: invert(1);
  }

  </style>
  <title>Conversor de Moedas</title>

  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
</head>
<body>

  <?php require './src/Conversor.php';?>
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  
  <div class="container-fluid">
    
    <div class="col-xs-1" align="center">
      <h1>Conversor de Moedas</h1>
      <img src="./img/coin-spin.gif" width="40px">
      </br>
      </br>
      <img src="https://www.alura.com.br/assets/img/imersoes/dev-2021/logo-imersao-conversor-de-moedas.svg" class="page-logo" alt="">
    </div>
    <div align="center">
      </br>
      <h3> Digite o valor em reais (R$) e selecione a moeda para converter</h3>
      </br>
    </div>
  
    <!-- Inicio do formulário -->
    <form method="POST" action="">
      <div class="form-group">
        <div >
          <input type="number" class="col-md-6 offset-md-3" name="valor" placeholder="R$">
        </div>
      </div>
      </br>

      <!-- Inicio do checks -->
      <fieldset class="row justify-content-md-center">

        <div class="col-md-auto">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="moeda" value="dolar" checked>
            <label class="form-check-label">
              Dolar ($)
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="moeda" value="euro">
            <label class="form-check-label">
              Euro (€)
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="moeda" value="libra">
            <label class="form-check-label">
              Libra Esterlina (£)
            </label>
          </div>
        </div>
      </fieldset>

      </br>
      <div class="row justify-content-md-center">
        <div class="col-md-auto">
          <button type="submit" class="btn btn-warning" name="enviar">Converter</button>
        </div>
      </div>
    </form>
    </br>

    <?php 
      $valorConvertido;
      if(isset($_POST['enviar'])) :
        $conversao = new Conversor();
        if($_POST['moeda'] == "dolar"){
          $valorConvertido = "$ " . $conversao->reaisDolar($_POST['valor']);
        }
        else if($_POST['moeda'] == "euro"){
          $valorConvertido = "€ " . $conversao->reaisEuro($_POST['valor']);
        }
        else if($_POST['moeda'] == "libra"){
          $valorConvertido = "£ " . $conversao->reaisLibra($_POST['valor']);
        }
    ?>

    <div style="text-align:center" class="alert alert-success" role="alert"><?=  $valorConvertido;?></div>
    
    <?php endif ?>

  </div>
</body>
</html>