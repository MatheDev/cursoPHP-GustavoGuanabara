<?php
    require_once 'interface.php';

    class ControleRemoto implements Controlador {
        
        #criando atributos
        private $volume;
        private $ligado;
        private $tocando;

        #criando métodos construtores

        public function __construct (){
            $this->volume = 50;
            $this->ligado = false;
            $this->tocando = false;
        }

        private function getVolume(){
            return $this->volume;
        }

        private function getLigado(){
            return $this->ligado;
        }

        private function getTocando(){
            return $this->tocando;
        }

        private function setVolume($vol){
            $this->volume = $vol;
        }

        private function setLigado($ligado){
            $this->ligado = $ligado;
        }

        private function setTocando($t){
            $this->tocando = $t;
        }

        public function ligar(){
            $this->setLigado(true);
        }

        public function desligar(){
            $this->setLigar(false);
        }

        public function abrirMenu(){
            echo "<p>----- MENU -----<P><br>";
            echo "<br> Está ligado? : " . ($this->getLigado() ? "SIM" : "NÃO");
            echo "<br>Está tocando ? : " . ($this->getTocando() ? "SIM" : "NÃO");
            echo "<br>Volume : " . $this->getVolume();
            for ($i=0; $i <= $this->getVolume() ; $i += 10) { 
                echo "|";
            }

            
        }

        public function fecharMenu(){
            echo "<br>Fechando Menu...";
        }

        public function maisVolume(){
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() + 10);
            } else{
                echo "<p> ERRO! Não posso aumentar o volume";
            }
        }

        public function menosVolume(){
            if ($this->getLigado()) {
                $this->setVolume($this->getVolume() - 10);
            }else{
                echo "<p> ERRO! Não posso abaixar o volume</p>";
            }
        }

        public function ligarMudo(){
            if ($this->getLigado() && $this->getVolume() > 0) {
                $this->setVolume(0);
            }
        }

        public function desligarMudo(){
            if ($this->getLigado() && $this->getVolume() == 0) {
                $this->setVolume(50);
            }
        }

        public function play(){
            if ($this->getLigado() && ! ($this->getTocando())) {
                $this->setTocando(true);
            }
        }

        public function pause(){
            if ($this->getLigado() && $this->getTocando()) {
                $this->setTocando(false);
            }
        }

    }


?>