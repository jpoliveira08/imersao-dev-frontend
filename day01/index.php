
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Calculadora de média</title>
    
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
    <?php require_once './src/Media.php'?>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <div class="container">
        <h1 class="page-title">Calculadora de média</h1>
        <div class="position-relative">
            <p class="page-subtitle">Descubra qual a sua média de nota de todas as provas!</p>
            <img src="https://www.alura.com.br/assets/img/imersoes/dev-2021/logo-imersao-conversor-de-moedas.svg" class="page-logo" alt="">
        </div>
        <div class="notas">
            <form method="POST" action="">
                <div class="form-group row">
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nota 1</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="nota1" placeholder="Digite a primeira nota">
                        </br>
                    </div>
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nota 2</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="nota2" placeholder="Digite a segunda nota">
                        </br>
                    </div>
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nota 3</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="nota3" placeholder="Digite a terceira nota">
                        </br>
                    </div>
                    <label for="colFormLabelSm" class="col-sm-2 col-form-label col-form-label-sm">Nota 4</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" name="nota4" placeholder="Digite a quarta nota">
                        </br>
                    </div>
                </div>
                <p>
                    <button type="submit" class="btn btn-primary" name="teste">Calcule a média</button>
                </p>
            </form>
            <div class="alert alert-success" role="alert">
			<?=
            $calculoMedia->getMedia();
            ?>
            </div>
            <?php if($calculoMedia->aprovacao()) : ?>
                <div class="alert alert-success" role="alert">Aprovado!!!</div>
            <?php else: ?>
                <div class="alert alert-danger" role="alert">Reprovado!!!</div>
            <?php endif ?>
        </div>
    </div>
</body>
</html>
