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
        $this->peso             = $peso;
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
        echo "pesando exatamente {$this->getPeso()} kg.</br>";
        echo "<br> Atualmente, ele está com {$this->getVitorias()} Vitórias, ";
        echo "{$this->getDerrotas()} Derrotas e ";
        echo "{$this->getEmpates()} Empates.</br>";
    }
    public function status() {
        echo "<br>{$this->getNome()}</br>";
        echo "<br>{$this->getPeso()}</br>";
        echo "<br>{$this->getVitorias()}</br>";
        echo "<br>{$this->getDerrotas()}</br>";
        echo "<br>{$this->getEmpates()}</br>";
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
    }
    public function setCategoria($categoria) {
        if($this->getCategoria() < 52.2){
            $this->setCategoria($this->getCategoria("Inválido Magrelo"));
        } else if ($this->getCategoria() <= 70.3){
            $this->setCategoria($this->getCategoria("Leve"));
        } else if ($this->getCategoria() <= 83.9){
            $this->setCategoria($this->getCategoria("Medio"));
        } else if ($this->getCategoria() <= 120.2){
            $this->setCategoria($this->getCategoria("Pesado"));
        } else {
            $this->setCategoria($this->getCategoria("Inválido Gordão"));
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