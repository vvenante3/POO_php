<?php

class Corrida
{
    private ?Carro $veiculo1     = null;
    private ?Carro $veiculo2     = null;
    private bool   $aprovada     = false;

    public function __construct()
        {
            $this->veiculo1  = null;
            $this->veiculo2  = null;
            $this->aprovada = false;
        }
    
    // Métodos Principais
    public function marcarCorrida($v1, $v2)
    {
        $this->veiculo1 = $v1;
        $this->veiculo2 = $v2;
        $this->aprovada = true;
    }

    public function Correr()
    {

    }

    // Métodos Especiais
    public function getVeiculo1()
    {
        return $this->veiculo1;
    }
    public function getVeiculo2()
    {
        return $this->veiculo2;
    }
    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setVeiculo1($veiculo1)
    {
        $this->veiculo1 = $veiculo1;
    }
    public function setVeiculo2($veiculo2)
    {
        $this->veiculo2 = $veiculo2;
    }
    public function setAprovada($aprovada)
    {
        $this->aprovada = $aprovada;
    }

}

?>