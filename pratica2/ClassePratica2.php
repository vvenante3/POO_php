<?php

Class Carro {
    public $marca;
    public $modelo;
    public $cor;
    public $ligado;
    public $desligado;
    private $motor;
    private $motorista;
    private $dirigir;

    public function __construct()
    {
        
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    } 

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
       $this->modelo = $modelo; 
    }

    public function getLigar() 
    {
        return $this->ligado;
    }

    public function setLigar($ligado)
    {
        $this->ligado = $ligado;
    }

    public function getDesligar()
    {
        return $this->desligado;
    }

    public function setDesligar($desligado)
    {
        $this->desligado = $desligado;
    }

    public function getMotor(){
        return $this->motor;
    }

    public function setMotor($motor){
        $this->motor = $motor;
    }

    public function getMotorista(){
        return $this->motorista;
    }

    public function setMotorista($motorista){
        $this->motorista = $motorista;
    }

    public function getDirigir()
    {
        return $this->dirigir;
    }

    public function setDirigir($dirigir)
    {
        $this->dirigir = $dirigir;
    }

}

?>