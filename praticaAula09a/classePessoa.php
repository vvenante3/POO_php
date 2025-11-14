<?php 

class Pessoa{

    private string $nome;
    private int    $idade;
    private bool   $sexo;

    public function __construct()
        {
            
        }

    // métodos principais
    public function fazerNiver()
    {
        $this->idade ++;
    }

    // métodos especiais
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
        $this->sexo - $sexo;
    }
    
}


?>