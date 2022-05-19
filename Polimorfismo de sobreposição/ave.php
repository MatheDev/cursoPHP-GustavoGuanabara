<?php

require_once 'animal.php';


class Ave extends Animal{

    // Definindo atributos

    private $corPena;

    // Sobrepondo os métodos da classe progenitora

    public function locomover(){
        echo '<p>Voando</p>';
    }

    public function alimentar(){
        echo '<p>Comendo</p>';
    }

    public function emitirSom(){
        echo '<p>Som de ave</p>';
    }
    
    // Definindo métodos da classe filha

    public function fazerNinho(){
        echo 'fazendo ninho';
    }

    // Métodos especiais


    public function setCorPena($corPena){
        $this->corPena = $corPena;
    }

    public function getCorPena(){
        return $this->corPena;
    }


}

?>