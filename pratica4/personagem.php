<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica Personagem RPG</title>
</head>
<body>
    <?php
        require_once 'classePersonagem.php';

        $personagem1 = new Personagem();
            $personagem1->setNome("Liza");
            $personagem1->setClasse("Mago");

        $personagem2 = new Personagem();
            $personagem2->setNome("Arthur");
            $personagem2->setClasse("Guerreiro");

        print_r($personagem1);
        print_r($personagem2);

    ?>
</body>
</html>