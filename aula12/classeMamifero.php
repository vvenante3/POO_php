<?php

require_once 'classeAnimal.php';

class Mamifero extends Animal
{
    private $corPelo;

    // Método Sobrepor
    public function locomover()
    {
        echo "Correndo";
    }
    public function alimentar()
    {
        echo "Alimentação por leite";
    }
    public function emitirSom()
    {
        echo "Som de Mamífero";
    }

    // Métodos Especiais
    public function getCorPelo()
    {
        return $this->corPelo;
    }
    public function setCorPelo($corPelo)
    {
        $this->corPelo = $corPelo;
    }

}



?>