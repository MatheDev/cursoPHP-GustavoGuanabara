<?php
require_once 'pessoa.php';
class Aluno extends Pessoa {
    
    // definindo atributos

    private $matricula;
    private $curso;


    // método
 
    public function cancelarMart(){
        echo 'Matrícula será cancelada!!';
    }

    // métodos especiais

    public function getMatricula(){
        return $this->matricula;
    }

    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }

}


?>