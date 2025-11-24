<?php

require_once 'classeAluno.php';

class Bolsista extends Aluno
{
    private $bolsa;
    private function renovarBolsa() {
        echo "<p>Bolsa Renovada!</p>";
    }
    public function pagarMensalidade()
    {
        echo "<p>$this->nome é bolsista! Então paga com desconto</p>";
    }
    public function getBolsa()
    {
        return $this->bolsa;
    }
    public function setBolsa($bolsa)
    {
        $this->bolsa = $bolsa;
    }
}

?>