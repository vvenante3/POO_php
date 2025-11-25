<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática aula 12</title>
</head>
<body>
    <?php

        require_once 'classeAnimal.php';
        require_once 'classeMamifero.php';
        require_once 'classeReptil.php';
        require_once 'classePeixe.php';
        require_once 'classeAve.php';
        require_once 'classeCachorro.php';
        require_once 'classeCanguru.php';
        require_once 'classeCobra.php';
        require_once 'classeGoldfish.php';
        require_once 'classeTartaruga.php';
        
        $m = new Mamifero();
        $a = new Ave();
        $r = new Reptil();
        $c = new Canguru();
        $k = new Cachorro();
        $t = new Tartaruga();

        // $m->locomover();
        // $c->locomover();
        // $k->locomover();
        // $t->locomover();

        $m->emitirSom();
        $k->emitirSom();



    ?>
</body>
</html>