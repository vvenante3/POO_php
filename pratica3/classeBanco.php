<?php

Class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;


    public function abrirConta()    // Ao abrir terá que escolher entre CC e CP, ao abrir($status = true): se for CC irá ganhar R$50 e CP R$150 
    {

    }

    public function fecharConta()   // Pra fechar conta, não pode ter dinheiro & débito
    {

    }

    public function depositar()     // só pode depositar se a conta estiver com $stauts = true  
    {

    }

    public function sacar()         // $status = true && precisa ter saldo
    {

    }

    public function pagarMensal()   // CC irá pagar R$12 && CP R$20
    {

    }

    public function getnumConta() {
        return $this->numConta;
    }

    public function setnumConta($numC) {
        $this->numConta = $numC;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo() {
        // desev.
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono() {
        // desev.
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo() {
        // desev.
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus(){
        // desev.
    }


}

?>