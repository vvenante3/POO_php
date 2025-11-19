<?php

class Pessoa 
{
    // atributos
    private $nome;
    private $idade;
    private $sexo;

    // Método Construtor
    public function __construct()
    {

    }

    // Métodos Principais
    public function fazerNiver()
    {
        $this->idade ++;
    }

    // Métodos Especiais
    public function getNome()
    {
        return $this->nome;
    }
    public function getIdade()
    {
        return $this->idade;
    }
    public function getSexo()
    {
        return $this->sexo;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

}

?>