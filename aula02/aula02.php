<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02 - Classe caneta</title>
</head>
<body>
    <?php
        require_once 'caneta_poo.php';

        $classe1 = new Caneta;
        $classe1->cor        = "Azul";
        $classe1->ponta      = "0.5";
        $classe1->tampar();
        
        print_r($classe1);


        $classe2 = new Caneta;
        $classe2->cor       = "Verde";
        $classe2->ponta     = "0.5";
        $classe2->carga     = "50";
        $classe2->tampar();

        print_r($classe2);


    ?>
</body>
</html>