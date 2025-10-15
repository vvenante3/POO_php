<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 - Visibilidade e Atributos</title>
</head>
<body>
    <?php
        require_once 'classe3.php';

        $c1 = new Caneta;
        $c1->modelo = "Bic";
        $c1->cor    = "Azul";

        var_dump($c1);
        $c1->rabiscar();

    ?>
</body>
</html>