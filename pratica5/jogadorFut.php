<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática - Jogador de Fut</title>
</head>
<body>
    <?php
        require_once 'classeJogadorFut.php';

        $jogador1 = new JogadorFut("Fortaleza", "Atacante", 10, true);
            $jogador1->correr();
            $jogador1->marcar();

            // var_dump($jogador1);

    ?>
</body>
</html>