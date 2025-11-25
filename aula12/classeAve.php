<?php

require_once 'classeAnimal.php';

class Ave extends Animal
{
    private $corPena;

    // Métodos Sobrepor
    public function locomover()
    {
        echo "Voando";
    }
    public function alimentar()
    {
        echo "Comendo Frutas/Anfíbios/Insetos";
    }
    public function emitirSom()
    {
        echo "Som de Ave";
    }
    public function fazerNinho()
    {
        echo "Construiu um ninho..";
    }

    // Métodos Especiais
    public function getCorPena()
    {
        return $this->corPena;
    }
    public function setCorPena($corPena)
    {
        $this->corPena = $corPena;
    }
}


?>