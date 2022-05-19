<?php

class Pessoa {

    //definindo atributos

    private $nome;
    private $idade;
    private $sexo;

    
    // método construtor

    function __construct($nome, $idade, $sexo){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }


    // método

    public function fazerAniver(){
        $idade ++;
    }

    //métodos especiais

    function getNome(){
        return $this->nome;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getIdade(){
        return $idade;
    }


    function setIdade($idade){
        $this->idade;
    }

    function getSexo(){
        return $this->sexo;
    }

    function setSexo($sexo){
        $this->sexo = $sexo;
    }
}

?>