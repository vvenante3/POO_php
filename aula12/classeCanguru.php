<?php

require_once 'classeAnimal.php';
require_once 'classeMamifero.php';

class Canguru extends Mamifero
{
    public function usarBolsa()
    {

    }

    // Sobrepor
    public function locomover()
    {
        echo "Saltando";
    }
}