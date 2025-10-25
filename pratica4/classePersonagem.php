<?php

class Personagem
{
    // atributos
    private  ?string  $nome     = null;
    private  ?string  $classe   = null;
    private  int     $nivel;
    private  int     $vida;
    private  int     $forca;
    private  bool    $vivo;

    // métodos
    public function __construct()
    {
        $this->nivel    = 0;
        $this->vida     = 100;
        $this->forca    = 100;
        $this->vivo     = true;
    }

    // public function atacar()        
    // {
        
    // }

    public function dano($d)          // diminui a vida do personagem com base na força (-10% da força(atributo a ser passado))
    {
        $dano = $d * 0.10 * $this->getForca();
        $this->setVida($this->getVida() - $dano);

            echo "A {$this->getNome()} perdeu {$dano} de vida.";
                $this->death();

    }

    public function death()        // se vida menor que 0, $vivo = false; 
    {
        if($this->getVida() <= 0){
            $this->setVivo(false);
                echo "<br> {$this->getNome()} morreu.";
        }
    }

    public function descansar()     // se vida < 100, recupera 10 de vida
    {
        if ($this->getVida() < 100) {
            $this->setVida($this->getVida() + 10);
            echo "<p>Vida recuperada +10.</p>";
        } else {
            echo "<p>Vida cheia. Sem possiblidade de descansar.</p>";
        }
    }

    public function subirNivel()    // aumenta nivel de 1 em 1
    {
       $this->setNivel($this->getNivel() + 1);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getClasse()
    {
        return $this->classe;
    }

    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    public function getNivel()
    {
        return $this->nivel;
    }

    public function setNivel($nivel)
    {
        $this->nivel = $nivel;
    }

    public function getVida()
    {
        return $this->vida;
    }

    public function setVida($vida)
    {
        $this->vida = $vida;
    }

    public function getForca()
    {
        return $this->forca;
    }

    public function setForca($forca)
    {
        $this->forca = $forca;
    }

    public function getVivo()
    {
        return $this->vivo;
    }

    public function setVivo($vivo)
    {
        $this->vivo = $vivo;
    }

}

?>