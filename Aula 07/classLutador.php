<?php
    class Lutador {
        #definindo atributos

        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        
        #métodos

        public function apresentar(){
            echo "<p>-------------------</p>";
            echo "<p>Lutador: " . $this->getNome() . "</p><br>";
            echo "Origem: " . $this->getNacionalidade() . "<br>";
            echo  $this->getIdade() . " Anos<br>";
            echo  $this->getAltura() . " m de altura<br>";
            echo  $this->getPeso() . " Kg<br>";
            echo "Ganhou " . $this->getVitorias();
            echo "<br>Perdeu " . $this->getDerrotas();
            echo "<br>Empatou " . $this->getEmpates();
        }
        
        public function status(){
            echo "<br>-------------------";
            echo  "<br>" .$this->getNome();
            echo "<br>É um peso " . $this->getCategoria() . "<br>" ;
            echo $this->getVitorias() . " Vitórias<br>";
            echo $this->getDerrotas() . " Derrotas<br>";
            echo $this->getEmpates() . " Empates<br>";    
        }

        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }
        
        #métodos especiais

        #método construtor, passando os parametros para darem valor aos atributos acima

         function __construct($no, $na, $id, $al, $pe,$vi, $de, $em){
            $this->nome = $no;  // ou poderia ser feito : $this->setNome($no);
            $this->nacionalidade = $na; // ou poderia ser feito : $this->setNacionalidade($na);
            $this->idade = $id; // ou poderia ser feito : $this->setIdade($id);
            $this->altura = $al; // ou poderia ser feito : $this->setAltura($al);
            $this->setPeso($pe); // ou poderia ser feito : $this->setPeso($pe);
            $this->vitorias = $vi; // ou poderia ser feito : $this->setVitorias($vi);
            $this->derrotas = $de; // ou poderia ser feito : $this->setDerrotas($de);
            $this->empates = $em; // ou poderia ser feito : $this->setEmpates($em);
        }

        
        #métodos especiais para o atributo nome

        public function getNome(){
            return $this->nome;
        }

        public function setNome($no){
            $this->nome = $no;
        }

        #métodos especiais para o atributo nacionalidade

        public function getNacionalidade(){
            return $this->nacionalidade;
        }

        public function setNacionalidade($na){
            $this->nacionalidade = $na;
        }
    
        #métodos especiais para o atributo idade

        public function getIdade(){
            return $this->idade;
        }
    
        public function setIdade($id){
            $this->idade = $id;
        }
    
        #métodos especiais para o atributo altura
    
        public function getAltura(){
            return $this->altura;
        }  
    
        public function setAltura($al){
            $this->altura = $al;
        }
    
        #métodos especiais para o atributo peso

        public function getPeso(){
            return $this->peso;
        }
    
        public function setPeso($pe){
            $this->peso = $pe;
            $this->setCategoria();
        }

        #métodos especiais para o atributo categorias

        public function getCategoria(){
            return $this->categoria;
        }
    
        private function setCategoria(){
            if ($this->getPeso() < 52.9) {
                $this->categoria = "Iválido";
            } elseif ($this->getPeso() <= 72.9) {
                $this->categoria = "Peso Leve";
            } elseif ($this->getPeso() <= 82.9) {
                $this->categoria = "Peso Médio";
            }elseif($this->getPeso() <= 120.0){
                $this->categoria = "Peso Pesado";
            } else{
                "ACIMA DO PESO";
            }
        }

        #métodos especiais para o atributo vitorias

        public function getVitorias(){
            return $this->vitorias;
        }

        public function setVitorias($vi){
            $this->vitorias = $vi;
        }   

        #métodos especiais para o atributo Derrotas

        public function getDerrotas(){
            return $this->derrotas;
        }
        public function setDerrotas($de){
            $this->derrotas = $de;
        }
    
        #métodos especiais para o atributo empates

        public function getEmpates(){
            return $this->empates;
        }
    
        public function setEmpates($em){
            $this->empates = $em;
        }
    
    
    
    
    
    }


?>