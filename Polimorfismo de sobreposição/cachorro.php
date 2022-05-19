<?php

require_once 'mamifero.php';

class Cachorro extends Mamifero {

    // Métodos próprio da classe

    public function enterrarOsso(){
        echo 'enterrando o osso';
    }

    public function abanarRabo(){
        echo 'abanando o rabo';
    }

    
    public function locomover(){
        echo '<p>Correndo...</p>';
    }

    public function emitirSom(){
        echo '<p>au au </p>';
    }
}

?>