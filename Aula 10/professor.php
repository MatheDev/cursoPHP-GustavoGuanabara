<?php
require_once 'pessoa.php';
class Professor extends Pessoa {

    // definindo atributos

    private $especialidade;
    private $salario;
 
    // método

    public function receberAum($aumento){
        $this->salario += $aumento;
    }

    // métodos especiais

    public function getEspecialidade(){
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade){
        $this->especialidade = $especialidade;
    }

    public function getSalario(){
        return $this->salario;
    }

    public function setSalario($salario){
        $this->salario = $salario;
    }

}

?>
