<?php

require_once 'controladorPortao.php';

class controleRemoto implements controladorPortao {

    //atributos
    private     bool    $abrir;
    private     bool    $parar;
    private     bool    $fechar;

    public function __construct()
    {
        $this->abrir    = false;
        $this->fechar   = false;
        $this->parar    = true;
    }

    public function abrirPortao() {
        if($this->getParar() && !$this->getFechar()){
            $this->setFechar($this->getFechar(false));
            $this->setAbrir($this->getAbrir(true));
                echo "<br>Abrindo Portão..</br>";
        }
    }

    public function pararPortao() {
        if($this->getAbrir() && $this->getFechar()){
            $this->setAbrir($this->getAbrir(false));
            $this->setFechar($this->getFechar(false));

            $this->setParar($this->getParar(true));
                echo "<br>Parando portão..</br>";
        } else {
            echo "<br>portão já está parado</br>";
        }
    }

    public function fecharPortao() {
        if($this->getParar() && !$this->getAbrir()){
            $this->setAbrir($this->getAbrir(false));
            $this->setFechar($this->getFechar(true));
                echo "<br>Fechando Portão..</br>";
        } else {
            echo "<br>inviável fechar portão</br>";
        }
    }

    // métodos especiais
    private function getAbrir() {
        return $this->abrir;
    }

    private function getParar() {
        return $this->parar;
    }

    private function getFechar() {
        return $this->fechar;
    }

    private function setAbrir($abrir) {
        $this->abrir = $abrir;
    }

    private function setParar($parar) {
        $this->parar = $parar;
    }

    public function setFechar($fechar) {
        $this->fechar = $fechar;
    }

}

?>