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
        require_once 'classeAlunoBolsista.php';

        $a1 = new Aluno();
        $a1->setNome("Pedro");
        $a1->setMatricula(111111);
        $a1->setIdade(16);
        $a1->setSexo("m");
        $a1->setCurso("Informática");
        $a1->pagarMensalidade();

        var_dump($a1);

        $b1 = new Bolsista();
        $b1->setMatricula(1112);
        $b1->setNome("Jubileu");
        $b1->setBolsa(2.5);
        $b1->setCurso("Administracao");
        $b1->setIdade(17);
        $b1->pagarMensalidade();

        var_dump($b1);

    ?>
</body>
</html>