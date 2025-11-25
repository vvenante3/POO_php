<?php

require_once 'classeAnimal.php';

class Peixe extends Animal
{
    private $corEscama;

    // Método Sobreposição
    public function locomover()
    {
        echo "Nadando";
    }
    public function alimentar()
    {
        echo "Comendo Substâncias";
    }
    public function emitirSom()
    {
        echo "Peixe não emite som";
    }
    public function soltarBolha()
    {
        echo "Soltando bolha..";
    }

    // Métodos Especiais
    public function getCorEscama()
    {
        return $this->corEscama;
    }
    public function setCorEscama($corEscama)
    {
        $this->corEscama = $corEscama;
    }
}

?>