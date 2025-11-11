<?php

require_once 'interfaceCarro.php';
class Carro implements interfaceCarro{

    private     bool    $ligado;

    public function __construct()
    {
        $this->ligado = false;
    }
    // métodos principais
    public function ligar()
    {

    }
    public function desligar()
    {

    }
    public function acelerar()
    {
        
    }
    public function frear()
    {

    }

    // métodos especiais

    public function getLigado()
    {
        return $this->ligado;
    }
    public function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }
}

?>