<?php

require_once 'animal.php';


class Peixe extends Animal {

// Definindo atributos

private $corEscama;

// Sobrepondo os métodos da classe progenitora

public function locomover(){
    echo '<p>Nadando<?p>';
}

public function alimentar(){
    echo '<p>Comendo ração</p>';
}

public function emitirSom(){
    echo '<p>Som de Peixe</p>';
}

// Definindo métodos da classe filha

public function soltarBolha(){
    echo '<p>Soltando bolha</p>';
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
