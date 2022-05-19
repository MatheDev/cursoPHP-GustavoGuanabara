<?php
require_once 'pessoa.php';
class Funcionario extends Pessoa{

    // definindo atributos

    private $setor;
    private $trabalhando;

    // método

    public function mudarTrabalho(){
        $this->trabalhando = ! $this->trabalhando;
    }

    // métodos especiais

    public function getSetor(){
        return $this->setor;
    }

    public function setSetor($setor){
        $this->setor = $setor;
    }

    public function getTrabalhando(){
        return $this->trabalhando;
    } 

    public function setTrabalhando($trabalhando){
        $this->trabalhando = $trabalhando;
    }
}


?>