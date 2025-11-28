<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final A</title>
</head>
<body>
    <pre>
    <?php
        require_once 'classeVideo.php';
        require_once 'classePessoa_PF_A.php';
        require_once 'classeGafanhoto.php';
        require_once 'classeVisualizacao.php';

        $v[0] = new Video("Vizinhança do Barulho");
        $v[1] = new Video("Xing Ling");
        $v[2] = new Video("Velozes & Furiosos");

        $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
        $g[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

        $vis[0] = new Visualizacao($g[0], $v[2]);
        $vis[1] = new Visualizacao($g[0], $v[1]);

        $vis[0]->avaliar();
        $vis[1]->avaliarNota(85);

        print_r($vis);
        
    ?>
    </pre>
</body>
</html>