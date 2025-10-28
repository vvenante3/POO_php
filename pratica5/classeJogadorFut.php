<?php

class JogadorFut
{
    //atributos
    public  string  $time;
    public  string  $posicao;
    public  int     $numCamisa;
    public  bool    $bola = false;
      
    
    // métodos
    public function __construct($time, $posicao, $numCamisa, $bola)
    {
        $this->time         = $time;
        $this->posicao      = $posicao;
        $this->numCamisa    = $numCamisa;
        $this->bola         = $bola; 
    }


    public function chutarBola()            // se bola for true, jogador consegue chutar.. senão, não é possível chutar.
    {
        if ($this->getBola() === true){
            echo "Jogador chutou no gol!";
        } else {
            echo "Jogador sem a posse de bola. Impossível finalizar.";
        }

    }

    public function tocarBola()             // se possuir posse de bola, irá realizar o toque, caso contrário não será possível
    {
        if($this->getBola() === true){
            echo "Jogador realizou o passe!";
        } else {
            echo "Jogador sem posse de bola. Impossível realizar o passe.";
        }
    }

    public function cruzarBola()
    {
        if($this->getBola() === true){
            echo "Jogador realizou o cruzamento!";
        } else {
            echo "Jogador sem posse de bola. Impossível realizar o cruzamento";
        }

    }

    public function correr()
    {
        echo "Jogador está correndo";
    }

    public function marcar()
    {
        if($this->getBola() === false){
            echo "Jogador realizando a marcação no adversário";
        } else {
            echo "Jogador com posse de bola, não há como realizar marcação!";
        }
    }

    // daqui pra baixo

    public function getTime() {
        return $this->time;
    }

    public function setTime($time) {
        $this->time = $time;
    }

    public function getPosicao() {
        return $this->posicao;
    }

    public function setPosicao($posicao) {
        $this->posicao = $posicao;
    }

    public function getnumCamisa() {
        return $this->numCamisa;
    }

    public function setnumCamisa($numCamisa) {
        $this->numCamisa = $numCamisa;
    }

    public function getBola() {
        return $this->bola;
    }

    public function setBola($bola) {
        $this->bola = $bola;
    }

}



?>