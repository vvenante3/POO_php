<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática Banco</title>
</head>
<body>
    <?php
        require_once 'classeBanco.php';

        $pessoa1 = new ContaBanco();
        $pessoa2 = new ContaBanco();

        $pessoa1->setDono("Jubileu");
        $pessoa1->abrirConta("CC");
        $pessoa1->setnumConta(123);

            $pessoa1->depositar(300);
            $pessoa1->pagarMensal();

            $pessoa1->fecharConta();
        

        $pessoa2->setDono("Creuza");
        $pessoa2->abrirConta("CP");
        $pessoa2->setnumConta(321);

            $pessoa2->depositar(500);
            $pessoa2->sacar(100);
            $pessoa2->pagarMensal();

            $pessoa2->fecharConta();

        var_dump($pessoa1);
        var_dump($pessoa2);

    ?>
</body>
</html>