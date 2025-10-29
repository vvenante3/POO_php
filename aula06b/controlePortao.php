<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática Encapsulamento</title>
</head>
<body>
    <?php
        require_once 'classeControlePortao.php';

            $portao1 = new ControleRemoto();

            // $portao1->fecharPortao();
            // $portao1->pararPortao();
            $portao1->abrirPortao();

    ?>
</body>
</html>