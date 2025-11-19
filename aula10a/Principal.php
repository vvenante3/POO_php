<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pratica aula 10</title>
</head>
<body>
    <?php
        require_once 'classePessoa.php';
        require_once 'classeAluno.php';
        require_once 'classeProfessor.php';
        require_once 'classeFuncionario.php';

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Professor();
        $p4 = new Funcionario();

        $p1->setNome("Pedro");
        $p2->setNome("Maria");
        $p3->setNome("Claúdio");
        $p3->setNome("Fabiana");


        var_dump($p1);
        var_dump($p2);
        var_dump($p3);
        var_dump($p4);

    ?>    
</body>
</html>