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
        return $this->login;
    }
    public function getTotAssistido()
    {
        return $this->totAssistido;
    }

    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function setTotAssistido($totAssistido)
    {
        $this->totAssistido = $totAssistido;
    }

}

?>