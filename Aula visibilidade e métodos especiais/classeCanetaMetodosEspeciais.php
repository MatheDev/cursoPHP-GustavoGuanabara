<?php

class Caneta{
    public $modelo;
    private $ponta;
    private $tampada;
    private $cor;
    public function Caneta($m,$c,$p){   /// o método __construct() tambem pode ser declarado com o mesmo nome da classe no caso seria function Caneta()
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }

    public function tampar(){
        $this->tampada = true;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($m){
        $this->modelo = $m;
    }
    
    public function getPonta(){
        return $this->ponta;
    }

    public function setPonta($p){
        $this->ponta = $p;
    }
}


?>

