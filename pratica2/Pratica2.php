<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica 2 - POO</title>
</head>
<body>
    <?php
    require_once 'ClassePratica2.php';

    $carro1 = new Carro("Ford", "Ka", "Prata");

    $carro1->setMarca("Chevrolet");
    $carro1->setModelo("Prisma");
    $carro1->setCor("Branco");

    // $carro1->setModelo("Chevrolet"); Prevalece sobre o modelo na linha 12

    print_r($carro1);
    

    ?>
</body>
</html>