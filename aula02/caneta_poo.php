<?php

Class Caneta {

    //Atributos
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    //Métodos
    public function rabiscar() {
        if ($this->tampada === true) {
            echo "Não posso rabiscar";
        } else {
            echo "Estou rabiscando..";
        }
    }

    public function tampar() {
        $this->tampada = true;
    }

    public function destampar() {
        $this->tampada = false;
    }

}