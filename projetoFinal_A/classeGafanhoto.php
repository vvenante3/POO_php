<?php

require_once 'classePessoa_PF_A.php';

class Gafanhoto extends Pessoa
{

    private $login;
    private $totAssistido;

    public function __construct($nome, $idade, $sexo, $login)
    {
        parent::__construct($nome, $idade, $sexo);
        $this->nome = $nome;
        $this->totAssistido = 0;
    }

    // Métodos Principais
    public function viuMaisUm()
    {
        $this->totAssistido ++;
    }   

    // Métodos Especiais
    public function getLogin()
    {

    }
    public function getTotAssistido()
    {

    }

    public function setLogin()
    {

    }
    public function setTotAssistido()
    {

    }

}

?>