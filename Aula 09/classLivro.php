<?php

require_once 'classPessoa.php';
require_once 'publicacao.php';

    class Livro implements Publicacao {
        //definindo os atributos

        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;


        public function detalhes(){
            echo "<hr>Livro " . $this->titulo . " escrito por " . $this->autor;
            echo "<br> Páginas: " . $this->totPaginas . " Atual " . $this->pagAtual;
            echo "<br> Sendo lido por " . $this->leitor->getNome();

        }

        function __construct($titulo, $autor, $totPaginas, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->leitor = $leitor;
            $this->aberto = false;
            $this->pagAtual = 0;
        }

        function getTitulo(){
            return $this->titulo;
        }

        function setTitulo($titulo){
            $this->titulo = $titulo;
        }

        function getAutor(){
            return $this->autor;
        }

        function setAutor($autor){
            $this->autor = $autor;
        }

        function getTotPaginas(){
            return $this->totPaginas;
        }

        function setTotPaginas($totPaginas){
            $this->totPaginas = $totPaginas;
        }

        function getPagAtual(){
            return $this->pagAtual;
        }

        function setPagAtual($pagAtual){
            $this->pagAtual = $pagAtual;
        }

        function getAberto(){
            return $this->aberto;
        }

        function setAberto($aberto){
            $this->aberto = $aberto;
        }

        function getLeitor(){
            return $this->leitor;
        }

        function setLeitor($leitor){
            $this->leitor = $leitor; 
        }

        // metodos da interfcace

        public function abrir(){
            $this->aberto = true;
        }

        public function avancarPag(){
            if ($this->pagAtual == $totPaginas){
                $this->avancarPag = 0;
            }else{
                $this->avancarPag ++;
            }
        }

        public function fechar(){
            $this->aberto = false;
        }

        public function folhear($p){
            if ($p>$this->totPaginas){
                $this->pagAtual = 0;
            }else{
                $this->pagAtual = $p;
            }
        }

        public function voltarPag(){
            if ($this->pagAtual <= 0){
                $this->voltarPag = 0;
            }else{
                $this->pagAtual --;
            }
        }











    }


?>