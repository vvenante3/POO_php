<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática aula 9a</title>
</head>
<body>
    <?php 
        require_once 'classePessoa.php';
        require_once 'classeLivro.php';

        $p[0] = new Pessoa("Zé", 22, "M");
        $p[1] = new Pessoa("Xiquinha", 60, "F");

        $l[0] = new Livro("Como capotar um fusca", "Tião", 10, $p[0]);
        // $l[1] = new Livro("Como passar o calote no Seu Barriga", "Seu Madruga", 14, 3, $p[1]);

        $l[0]->folhear(40);
        // $l[0]->voltarPag();
        
        $l[0]->detalhes();


    ?>
</body>
</html>