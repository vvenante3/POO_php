<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática 1 POO</title>
</head>
<body>
    <?php
        require_once 'praticaBack1_poo.php';

        $game01 = new Games;
        $game01->categoria = "esporte";
        $game01->plataforma = "ambos";
        $game01->data_lançamento = DateTime::createFromFormat('d/m/Y', '20/10/2023');
        $game01->valor = 75.50;

        var_dump($game01);

        $game01->requisitos();


    ?>
</body>
</html>