<?php

require_once 'mamifero.php';

class Canguru extends Mamifero {

// Métodos da própria classe

public function usarBolsa(){
    echo 'Usando a bolsa';
}

// Sobrepondo o método da classe progenitora

public function locomover(){
    echo '<p>Saltando</p>';
}

public function emitirSom(){
    echo '<p>Som de Canguru</p>';
}

}



?>