<?php

require 'tratarEntrada.php';
    
    if (isset($_POST['teste'])){ // the POST form has been submitted
        $calculoMedia = new tratarEntrada($_POST['nota1'], $_POST['nota2'], $_POST['nota3'], $_POST['nota4']);
    }
?>