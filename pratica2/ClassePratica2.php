<?php

Class Carro {

    public $marca;
    public $modelo;
    public $cor;
    public $ligado;

    public function __construct($mar, $mod, $c)
    {
        $this->marca = $mar;
        $this->modelo = $mod;
        $this->cor = $c;
        $this->Ligar();
    }

    public function Ligar(){
        $this->ligado = true;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($mar){
        $this->marca = $mar;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($mod){
        $this->modelo = $mod;
    }

    public function getCor(){
        return $this->cor;
    }
    
    public function setCor($c){
        $this->cor = $c;
    }

}

?>