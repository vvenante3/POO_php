<?php

class Lutador{

    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct()
    {
        
    }

    public function apresentar() {

    }
    public function status() {

    }
    public function ganharLuta() {

    }
    public function perderLuta() {

    }
    public function empatarLuta() {

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
        $this->categoria = $categoria;
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