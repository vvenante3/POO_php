<?php

require_once 'interfaceCarro.php';
class Carro implements interfaceCarro{

    private     bool    $ligado;
    private     int     $potencia;
    private     string  $categoria;

    public function __construct($ligado, $categoria)
    {
        $this->ligado = false;
        $this->setCategoria($categoria);
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
    public function getPotencia()
    {
        return $this->potencia;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;
        $this->setCategoria();
    }
    public function setCategoria()
    {
        
    }

}

?>