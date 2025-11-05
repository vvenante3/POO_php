<?php

class Luta{

    private Lutador $desafiado;     // tipo abstrato
    private Lutador $desafiante;
    private int     $rounds;
    private bool    $aprovada;

    public function __construct($desafiado, $desafiante, $rounds, $aprovada)
    {
        $this->desafiado    = $desafiado;
        $this->desafiante   = $desafiante;
        $this->rounds       = $rounds;
        $this->aprovada     = $aprovada;
    }

    /*
        - Regras da Luta -

    1. Só pode ser marcada entre lutadores da mesma categoria;
    2. Desafiado e desafiante devem ser lutadores diferentes;
    3. Só pode acontecer se estiver aprovada;
    4. Só pode ter como resultado a vitória de um dos lutadores ou empate.

    
    */

    // Métodos Principais
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