<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos Especiais</title>
</head>
<body>
    <pre>
    <?php
        require_once 'caneta4.php';

        $c1 = new Caneta();

        // altera o conteúdo através da função
        $c1->setModelo("BIC");
        
        // altera o conteúdo diretamente na variável (publico)
        $c1->modelo = "BIC";

        // se tentarmos alterar a variavel "Ponta" diretamente, não será possível (private) :: Cannot access private property Caneta
        $c1->setPonta(0.5);
        

        print_r($c1);



    
    ?>
    </pre>
</body>
</html>