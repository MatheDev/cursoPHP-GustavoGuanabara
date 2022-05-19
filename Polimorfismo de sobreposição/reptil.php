<?php

require_once 'animal.php';

class Reptil extends Animal{

    // Definindo atributos

    private $corEscama;

    // Sobreponto métodos da classe progenitora

    public function locomover(){
        echo "<p>Rastejando</p>";
    }

    public function alimentar(){
        echo "<p>Comendo vegetal</p>";
    }

    public function emitirSom(){
        echo "<p>Som de reptil</p>";
    }

    // Métodos especiais

    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }

    public function getCorEscama(){
        return $this->corEscama;
    }
}

?>