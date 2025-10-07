<?php

Class Caneta {

    //Atributos
    public $modelo;
    public $cor;
    public $ponta;
    public $carga;
    public $tampada;

    //Métodos
    public function rabiscar()
    {
        if($tampada === 'true'){
            echo "É necessário destampar a caneta!";
        } else {
            echo "rabiscar e escrever";
        }
    }

    public function tampar()
    {
        $tampada = 'true';
    }

    //Estado
    


}