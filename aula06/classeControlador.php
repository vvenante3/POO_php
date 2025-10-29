<?php

require_once 'controlador.php';
class ControleRemoto implements Controlador{

    private     int     $volume;
    private     bool    $ligado;
    private     bool    $tocando;

    public function __construct()
    {
        $this->volume   = 50;
        $this->ligado   = false;
        $this->tocando  = false;
    }
    
    public function ligar() {
        $this->setLigado(true);
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function abrirMenu() {
        echo "<br> Está ligado?" . ($this->getLigado() ? "sim":"não");
        echo "<br> Está tocando?" . ($this->getTocando() ? "sim":"não");
        echo "<br>Volume: " . $this->getVolume();
        for($i = 0; $i <= $this->getVolume(); $i+=10) {
            echo "|";
        }
        echo "<br>";
    }

    public function fecharMenu() {
        echo "Fechando menu...";
    }

    public function maisVolume() {
        if($this->getligado()){
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume()>0){
            $this->setVolume(0);
        }
    }

    public function desligarMudO() {
        if($this->getLigado() && $this->getVolume()==0){
            $this->setVolume(50);
        }
    }

    public function play() {
        if($this->getLigado() && !($this->getTocando())){
            $this->setTocando(true);
        }
    }

    public function pause() {
        if($this->getLigado() && ($this->getTocando())){
            $this->setTocando(false);
        }
    }

    // métodos especiais
    public function getVolume(){
        return $this->volume;
    }

    public function getLigado() {
        return $this->ligado;
    }

    public function getTocando() {
        return $this->tocando;
    }

    public function setVolume($volume) {
        $this->volume = $volume;
    }

    public function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    public function setTocando($tocando) {
        $this->tocando = $tocando;
    }

}

?>