<?php

class ControleRemoto{

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

    }

    public function desligar() {

    }

    public function AbrirMenu() {

    }

    public function maisVolume() {

    }

    public function menosVolume() {

    }

    public function ligarMudo() {

    }

    public function desligarMudO() {

    }

    public function play() {

    }

    public function pause() {

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