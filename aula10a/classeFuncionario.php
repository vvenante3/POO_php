<?php

class Funcionario extends Pessoa
{
    // Atributos
    private $setor;
    private $trabalhando;

    // Métodos Principais
    public function mudarTrabalho()
    {
        $this->trabalhando = ! $this->trabalhando;
    }

    // Métodos Especiais
    public function getSet()
    {

    }
    public function getTrab()
    {

    }

    public function setSet()
    {

    }
    public function setTrab()
    {

    }
}

?>