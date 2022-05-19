<?php

require_once 'pessoa.php';

class Aluno extends Pessoa{
    // Definindo Atributos

    private $matricula;
    private $curso;


    // Método

    public function pagarMensal(){
        echo "<p>Pagando mensalidade do aluno $this->nome</p>";
    }

    // Métodos especiais

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getMatricula(){
        return $this->matricula;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }

    public function getCurso(){
        return $this->curso;
    }
}

?>