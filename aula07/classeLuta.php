<?php

class Luta{

    private ?Lutador $desafiado     = null;     // tipo abstrato
    private ?Lutador $desafiante    = null;     // tipo abstrato
    private int     $rounds;
    private bool    $aprovada;

    public function __construct()
    {
        $this->desafiado    = null;
        $this->desafiante   = null;
        $this->rounds       = 0;
        $this->aprovada     = false;
    }

    /*
        - Regras da Luta -

    1. Só pode ser marcada entre lutadores da mesma categoria;
    2. Desafiado e desafiante devem ser lutadores diferentes;
    3. Só pode acontecer se estiver aprovada;
    4. Só pode ter como resultado a vitória de um dos lutadores ou empate.

    
    */

    // Métodos Principais
    public function marcarLuta($l1, $l2) {
        if(($l1->getCategoria() === $l2->getCategoria()) && ($l1 != $l2)){
            $this->aprovada     = true;
            $this->desafiado    = $l1;
            $this->desafiante   = $l2;
        } else {
            $this->aprovada     = false;
            $this->desafiado    = null;
            $this->desafiante   = null;
        }
    }
    public function Lutar() {
        if($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            
            $vencedor = rand(0,2);  // numero aleatório

            switch($vencedor){
                case 0: // empate
                    echo "<p>Houve um empate!</p>";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                break;
                case 1: // desafiado vence
                    echo "<p>Desafiado Venceu!</p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                break;
                case 2: // desafiante vence
                    echo "<p>Desafiante Venceu!</p>";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                break;
            }
        } else {
            echo "<p>A luta não pode acontecer</p>";
        }
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