<?php
require_once 'animal.php';

class Mamifero extends Animal{
    
    // Definindo atributos
    
    private $corPelo;

    // Sobrepondo os métodos da classe progenitora

    public function locomover(){
        echo '<p>Correndo</p>';
    }

    public function alimentar(){
        echo '<p>Mamando</p>';
    }

    public function emitirSom(){
        echo '<p>Som de mamífero</p>';
    }


    // Métodos especiais

    public function getCorPelo(){
        return $this->corPelo;
    }

    public function setCorPelo($corPelo){
        $this->corPelo = $corPelo;
    }



}


?>