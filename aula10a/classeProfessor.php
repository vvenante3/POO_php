<?php

class Professor extends Pessoa
{
    // Atributos
    private $especialidade;
    private $salario;


    public function __construct($nome, $idade, $sexo)
    {
        $this->$nome = $nome = null;
        $this->$idade = $idade = null;
        $this->$sexo = $sexo = null;
    }

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