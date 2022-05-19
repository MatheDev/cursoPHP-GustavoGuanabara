<?php

abstract class Animal{
    
    // Definindo atributos
    
    protected $peso;
    protected $idade;
    protected $membros;

    // Definindos Métodos abstrados

    abstract public function  locomover();
    abstract public function  alimentar();
    abstract public function  emitirSom();


    // Métodos especiais 

    public function setPeso($peso){
        $this->peso = $peso;
    }

    public function getPeso(){
        return $this->peso;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setMembros($membros){
        $this->membros = $membros;
    }

    public function getMembros(){
        return $this->membros;
    }



}



?>