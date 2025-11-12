<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica06</title>
</head>
<body>
    <?php
        require_once 'classeCarro.php';
        
        $carro1 = new Carro(false, false, 300);
        $carro1->desligar();
        $carro1->frear();

        var_dump($carro1);


    ?>
</body>
</html>