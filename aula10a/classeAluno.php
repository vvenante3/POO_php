<?php

class Aluno extends Pessoa
{
    // Atributos
    private $matricula;
    private $curso;

    // Métodos Principais
    public function cancelarMatr()
    {
        echo "<p>Matrícula será cancelada!</p>";
    }

    // Métodos Especiais
    public function getMatr()
    {
        return $this->matricula;
    }
    public function getCurso()
    {
        return $this->curso;
    }

    public function setMatr($matricula)
    {
        $this->matricula = $matricula;
    }
    public function setCurso($curso)
    {
        $this->curso = $curso;
    }
}




?>