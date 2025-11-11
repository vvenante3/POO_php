<?php

require_once 'interfaceCarro.php';
class Carro implements interfaceCarro{

    private     bool    $ligado;
    private     bool    $desligado;
    private     int     $potencia;
    private     string  $categoria;

    public function __construct($ligado, $desligado, $categoria)
    {
        $this->ligado       = false;
        $this->desligado    = false;
        $this->setCategoria($categoria);
    }
    // métodos principais
    public function ligar()
    {
        if($this->getLigado() === true){
            echo "Já está ligado";
        } else {
            $this->setLigado($this->getLigado(true));
        }
    }
    public function desligar()
    {
        if($this->getDesligado() === true){
            echo "Já está desligado";
        } else {
            $this->setDesligado($this->getDesligado(true));
        }
    }
    public function acelerar()
    {
        if($this->getLigado() === true){
            echo "Acelerando...";
        } else {
            echo "Necessário ligar o carro";
        }
    }
    public function frear()
    {
        if($this->getLigado() === true){
            echo "Freando...";
        } else {
            echo "Carro desligado e parado. É necessário estar ligado";
        }
    }

    // métodos especiais

    public function getLigado()
    {
        return $this->ligado;
    }
    public function getDesligado()
    {
        return $this->desligado;
    }
    public function getPotencia()
    {
        return $this->potencia;
    }
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }
    public function setDesligado($desligado)
    {
        $this->desligado = $desligado;
    }
    public function setPotencia($potencia)
    {
        $this->potencia = $potencia;
        $this->setCategoria();
    }
    public function setCategoria()  // categoria A >500 potencia // cateogia B <= 499 // categoria C <= 350 // categoria D <=200 // categoria E <=120
    {
       if($this->potencia > 700){
        $this->categoria = "Cê é o bichão mesmo...";
       } else if($this->potencia > 500){
        $this->categoria = "A";
       } else if($this->potencia <= 499){
        $this->categoria = "B";
       } else if($this->potencia <= 350){
        $this->categoria = "C";
       } else if($this->potencia <= 200){
        $this->categoria = "D";
       } else if($this->potencia <= 120){
        $this->categoria = "E";
       } else if($this->potencia <= 90){
        $this->categoria = "Vaza daqui..";
       }
    }

}

?>