<?php 

require_once 'classePessoa.php';
class Livro implements Publicacao {

    private string  $titulo;
    private string  $autor;
    private int     $totPaginas;
    private int     $pagAtual;
    private bool    $aberto;
    private ?Pessoa $leitor = null;

    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo       = $titulo;
        $this->autor        = $autor;
        $this->totPaginas   = $totPaginas;
        $this->leitor       = $leitor;
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
        $this->pagAtual ++;
    }
    public function voltarPag()
    {
        $this->pagAtual --;
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