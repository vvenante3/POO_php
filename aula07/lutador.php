<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 07 - Lutador</title>
</head>
<body>
    <?php
        require_once 'classeLutador.php';

        $lutador1 = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, "Leve", 11, 2, 1);
        $lutador2 = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, "Leve", 14, 2, 3);
        $lutador3 = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, "Médio", 12, 2, 1);
        $lutador4 = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, "Médio", 13, 0, 2);
        $lutador5 = new Lutador("Ufocobol", "Brasil", 37, 1.70, 119.3, "Pesado", 5, 4, 3);
        $lutador6 = new Lutador("Nerdaard", "EUA", 30, 1.81, 105.7, "Pesado", 12, 2, 4);

        var_dump($lutador1);


    ?>
</body>
</html>