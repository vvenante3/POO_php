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
        $tipo = $t;

        // Definir status(true)
        $status = true;

        if($tipo === "CC"){
            $saldo = 50;
        } else {
            $saldo = 150;
        }
        
    }

    public function fecharConta()   // Pra fechar conta, não pode ter dinheiro & débito
    {
        if($saldo > 0){
            echo "Conta com dinheiro, não é possível fechar a conta.";
        } else if($saldo < 0){
            echo "Conta em débito";
        } else {
            $status.setStatus(false);
        }

    }

    public function depositar($v)     // só pode depositar se a conta estiver com $stauts = true  
    {
        if(getStatus() === true){
            setSaldo(getSaldo() + $v);
        } else {
            echo "Impossível depositar";
        }
    }

    public function sacar($v)         // $status = true && precisa ter saldo
    {
        if((getStatus() === true) && (getSaldo() > 0)){
            setSaldo(getSaldo() - $v);
        } else {
            echo "Impossível sacar";
        }
    }

    public function pagarMensal()   // CC irá pagar R$12 && CP R$20
    {
        if(getTipo() == "CC"){
            setSaldo(getSaldo() - 12);
        } else {
            setSaldo(getSaldo() - 20);
        }
    }

    public function getnumConta() {
        return $this->numConta;
    }

    public function setnumConta($n) {
        $this->numConta = $n;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($t) {
        $this->tipo = $t;
    }

    public function getDono() {
        return $this->dono;
    }

    public function setDono($d) {
        $this->dono = $d;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function setSaldo($s) {
        $this->saldo = $s;
    }

    public function getStatus(){
        return $this->status;
    }

    public function setStatus($s){
        $this->status = $s;
    }


}

?>