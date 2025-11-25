<?php

abstract class Animal
{
    private $peso;
    private $idade;
    private $membros;

    // Métodos Principais
    public function locomover()
    {

    }
    public function alimentar()
    {

    }
    public function emitirSom()
    {

    }

    // Métodos Especiais
    public function getPeso()
    {
        return $this->peso;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function getMembros()
    {
        return $this->membros;
    }

    public function setPeso($membros)
    {
        $this->membros = $membros;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function setMembros($membros)
    {
        $this->membros = $membros;
    }
}

?>