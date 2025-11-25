<?php

require_once 'classeMamifero.php';

class Cachorro extends Mamifero
{
    public function enterrarOsso()
    {
        echo "<p>enterrando osso</p>";
    }
    public function abanarRabo()
    {
        echo "<p>Abanando rabo</p>";
    }
    public function emitirSom()
    {
        echo "<p>Au Au</p>";
    }
    
}