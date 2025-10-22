<?php

Class ContaBanco{
    public      int         $numConta ;
    protected   string      $tipo;
    private     string      $dono;
    private     float       $saldo;
    private     bool        $status;

    public function __construct()
    {
        $this->saldo    = 0;
        $this->status   = false;
    }

    public function abrirConta($t)    // Ao abrir terá que escolher entre CC e CP, ao abrir($status = true): se for CC irá ganhar R$50 e CP R$150 
    {
        // Verificar o tipo de conta (CC II CP)
        $this->setTipo($t);

        // Definir status(true)
        $this->setStatus(true);

        if($t === "CC"){
            $this->setSaldo(50);
        } else {
            $this->setSaldo(150);
        }
        
    }

    public function fecharConta()   // Pra fechar conta, não pode ter dinheiro & débito
    {
        if($this->getSaldo() > 0){
            echo "<p>Conta com dinheiro, não é possível fechar a conta.</p>";
        } else if($this->getSaldo() < 0){
            echo "<p>Conta em débito</p>";
        } else {
            $this->setStatus(false);
        }

    }

    public function depositar($v)     // só pode depositar se a conta estiver com $stauts = true  
    {
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
        } else {
            echo "<p>Impossível depositar</p>";
        }
    }

    public function sacar($v)         // $status = true && precisa ter saldo
    {
        if(($this->getStatus()) && ($this->getSaldo() > $v)){
            $this->setSaldo($this->getSaldo() - $v);
        } else {
            echo "<p>Impossível sacar</p>";
        }
    }

    public function pagarMensal()   // CC irá pagar R$12 && CP R$20
    {
        if($this->getTipo() == "CC"){
            $v = 12;
        } else {
            $v = 20;
        }

        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $v);
        } else {
            echo "<p>Impossível cobrar mensalidade!</p>";
        }

    }

    public function getnumConta() {
        return $this->numConta;
    }

    public function setnumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($status){
        $this->status = $status;
    }


}

?>