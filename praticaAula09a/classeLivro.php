<?php 

require_once 'classeLivro.php';

class Livro implements Publicacao {

    private string  $titulo;
    private string  $autor;
    private int     $totPaginas;
    private int     $pagAtual;
    private bool    $aberto;
    private ?Pessoa $leitor = null;

    public function __construct()
    {
            
    }

    // Métodos da classePublicacao
    public function abrir()
    {

    }
    public function fechar()
    {

    }
    public function folhear()
    {
            
    }
    public function avancarPag()
    {
            
    }
    public function voltarPag()
    {

    }
    
    // Métodos principais
    public function detalhes()
    {

    }

    // Métodos especiais
    public function getTitulo()
    {
        return $this->titulo;
    }
    public function getAutor()
    {
        return $this->autor;
    }
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }
    public function getPagAtual()
    {
        return $this->pagAtual;
    }
    public function getAberto()
    {
        return $this->aberto;
    }
    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;
    }
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;
    }
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;
    }

}


?>