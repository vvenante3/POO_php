<?php

class Lutador{

    private string  $nome;
    private string  $nacionalidade;
    private int     $idade;
    private float   $altura;
    private float   $peso;
    private string  $categoria;
    private int     $vitorias;
    private int     $derrotas;
    private int     $empates;

    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $categoria, $vitorias, $derrotas, $empates)
    {
        $this->nome             = $nome;
        $this->nacionalidade    = $nacionalidade;
        $this->idade            = $idade;
        $this->altura           = $altura;
        $this->setPeso($peso);
        $this->categoria        = $categoria;
        $this->vitorias         = $vitorias;
        $this->derrotas         = $derrotas;
        $this->empates          = $empates;
    }

    public function apresentar() {
        echo "<br> O Lutador de agora é: {$this->getNome()},";
        echo " direto de {$this->getNacionalidade()}.</br>";
        echo "<br> Com seus {$this->getIdade()} anos de idade, ";
        echo "e com {$this->getAltura()} de altura, ";
        echo "pesando exatamente {$this->getPeso()} kg ";
        echo "da categoria {$this->getCategoria()}</br>";
        echo "<br> Atualmente, ele está com {$this->getVitorias()} Vitórias, ";
        echo "{$this->getDerrotas()} Derrotas e ";
        echo "{$this->getEmpates()} Empates.</br>";
    }
    public function status() {
        echo "<-------------LUTADOR------------->";
        echo "<br>Nome:         {$this->getNome()}</br>";
        echo "<br>Categoria:    {$this->getCategoria()}</br>";
        echo "<br>Qtd Vitórias: {$this->getVitorias()}</br>";
        echo "<br>Qtd Derrotas: {$this->getDerrotas()}</br>";
        echo "<br>Qtd Empates:  {$this->getEmpates()}</br>";
    }
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }

    // Métodos Especiais
    public function getNome() {
        return $this->nome;
    }
    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function getIdade() {
        return $this->idade;
    }
    public function getAltura() {
        return $this->altura;
    }
    public function getPeso() {
        return $this->peso;
    }
    public function getCategoria() {
        return $this->categoria;
    }
    public function getVitorias() {
        return $this->vitorias;
    }
    public function getDerrotas() {
        return $this->derrotas;
    }
    public function getEmpates() {
        return $this->empates;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }
    public function setAltura($altura) {
        $this->altura = $altura;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }
    private function setCategoria() {
        if($this->peso < 52.2){
            $this->categoria = "Inválido Raquitico";
        } else if($this->peso <= 70.3) {
            $this->categoria = "Leve";
        } else if($this->peso <= 83.9) {
            $this->categoria = "Médio";
        } else if($this->peso <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido Gordao";
        }
    }
    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }
    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }
    public function setEmpates($empates) {
        $this->empates = $empates;
    }

}


?>