<?php

Class Caneta {

    public $modelo;
    public $ponta;
    
    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($modelo) {
        $modelo = "m";
    }

    public function getPonta() {
        return $this->ponta;
    }
    public function setPonta() {
        $ponta = 0.5;
    }
}

?>