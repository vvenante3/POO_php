<?php

Class Games {
    // Atributos
    var $categoria;
    var $plataforma;
    var $controle;
    var $data_lançamento;
    var $valor;


    // Métodos
    public function jogar() {
        if($this->plataforma === 'console') {
            echo "iniciando console...";
        } else {
            echo "ligando PC...";
        } 
    }

    public function pegar() {
        if($this->controle === 'controle'){
            echo "pegando controle..";
        } else {
            echo "preparando teclado e mouse";
        }
    }

    public function requisitos() {
        $hoje = new DateTime();
        $carteira = 70;

        if($this->valor < $carteira && $this->data_lançamento < $hoje) {
            echo "pode jogar";
        } else {
            echo "não pode jogar";
        }
    }
}
    
?>