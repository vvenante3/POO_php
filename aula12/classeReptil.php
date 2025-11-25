<?php

require_once 'classeAnimal.php';

class Reptil extends Animal
{
    private $corEscama;

    //Método Sobrepor
    public function locomover()
    {
        echo "Rastejando";
    }
    public function alimentar()
    {
        echo "Comendo Vegetais/Insetos";
    }
    public function emitirSom()
    {
        echo "Som de Réptil";
    }
    
    //Métodos Especiais
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