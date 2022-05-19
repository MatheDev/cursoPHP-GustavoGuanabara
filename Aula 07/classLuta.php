<?php

class Luta {
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovado;

    public function marcarLuta($l1,$l2){
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
            $this->aprovado = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        } else {
            $this->aprovado = false;
            $this->desafiado = null;
            $this->desafiante = null;
        }
        
    }

    public function lutar(){
        if ($this->aprovado) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor) {
                case '0':  // Empate
                    echo "<p>Empatou!!!";
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;
                case '1': //Ganhou Desafiado
                    echo "<p>" . $this->desafiado->getNome() . " Venceu </p>";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case '2': //Ganhou Desafiante
                    echo "<p>" . $desafiante->getNome() ." Venceu </p>";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
       } else {
           echo "<p>Luta não pode acontecer</p>";
        }
        
        
    }

    public function getDesafiado(){
        return $this->desafiado;
    }

    public function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }

    public function getDesafiante(){
        return $this->desafiante;
    }

    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }

    public function getRounds(){
        return $this->rounds;
    }

    public function setRounds($rounds){
        $this->rounds = $rounds;
    }

    public function getAprovado(){
        return $this->aprovado;
    }

    public function setAprovado($aprovado){
        $this->aprovado = $aprovado;
    }
}
?>