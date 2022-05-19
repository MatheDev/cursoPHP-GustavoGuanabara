<?php

require_once 'aluno.php';

class Bolsista extends Aluno {
    // Definindo atributos

    private $bolsa;
    
    // Método

    public function renovarBolsa(){
        echo '<p>Bolsa renovada</p>';
        
    }

    // Sobreponto o método da class mãe Aluno
    public function pagarMensal(){
        echo "<p>Pagando a mensalidade de $this->nome com desconto</p>";
    }

    // Métodos especiais

    public function setBolsa($bolsa){
        $this->bolsa = $bolsa;
    }

    public function getBolsa(){
        return $this->bolsa;
    }
}


?>