<?php

class Professor extends Pessoa
{
    // Atributos
    private $especialidade;
    private $salario;

    // Métodos Principais
    public function ReceberAum($aum)
    {
        $this->salario += $aum;
    }

    // Métodos Especiais
    public function getEsp()
    {

    }
    public function getSal()
    {

    }

    public function setEsp()
    {

    }
    public function setSal()
    {

    }
}




?>