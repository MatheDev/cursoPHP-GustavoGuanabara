<?php

require_once 'Pessoa.php';

class Gafanhoto extends Pessoa {
    private $login, $totAssistido;


    public function viuMaisUm(){
        $this->totAssistido +=1;
    }

    public function __construct($nome, $idade, $sexo, $login){

    }

}


?>