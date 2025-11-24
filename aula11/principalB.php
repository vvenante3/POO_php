<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - Pratica</title>
</head>
<body>
    <?php
        require_once 'classeAluno.php';

        $a1 = new Aluno();
        $a1->setNome("Pedro");
        $a1->setMatricula(111111);
        $a1->setIdade(16);
        $a1->setSexo("m");
        $a1->setCurso("Informática");

        var_dump($a1);

    ?>
</body>
</html>