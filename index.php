<?php

Class HelloWord
{
    public $hello;

    public function dizerOla() {
        echo "Hello Word! my name is {$this->hello}";
    }
}

$dizer = new HelloWord();
$dizer->hello = "Vitor";
$dizer->dizerOla();