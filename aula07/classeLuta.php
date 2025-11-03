<?php

class Luta{

    private string  $desafiado;
    private string  $desafiante;
    private int     $rounds;
    private bool    $aprovada;

    public function __construct($desafiado, $desafiante, $rounds, $aprovada)
    {
        $this->desafiado    = $desafiado;
        $this->desafiante   = $desafiante;
        $this->rounds       = $rounds;
        $this->aprovada     = $aprovada;
    }

    // Métodos
    public function marcarLuta() {

    }
    public function Lutar() {

    }

    // Métodos Especiais 
    public function getDesafiado() {
        return $this->desafiado;
    }
    public function getDesafiante() {
        return $this->desafiante;
    }
    public function getRounds() {
        return $this->rounds;
    }
    public function getAprovada() {
        return $this->getAprovada();
    }

    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }
    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }
    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }
    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

}

?>