<?php

require_once 'pessoa.php';
require_once 'publicacao.php';

class Livro {

    //definindo atributos

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    // método construtor

    funcion __construct($titulo, $autor, $totPaginas, $leitor){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->aberto = false;
        $this->pagAtual = 0;
    }
    
    
    // método

    public function detalhes(){
     echo '<hr> O livro ' . $this->titulo;
     echo '<br> Está sendo lido por ' . $this->leitor->getNome();
     echo '<br> E está na página ' . $this->pagAtual;
    }


    // métodos especiais
    
    
     function getTitulo(){
        return $titulo;
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
        return $totPaginas;
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
        $this->leitor;
    }

    // métodos da interface

    public function abrir(){
        $this->aberto = true;
    }

    public function fechar(){
        $this->aberto = false;
    }

    public function folhear($p){
        if($p > $this->totPagina){
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }

    public function avancarPag(){
        if ($this->pagAtual > $this->getTotPaginas() ){
            $this->pagAtual = 0;
        }else {
            $this->pagAtual = +1;
        }
    }


    public function voltarPag(){
        if($this->pagAtual < $this->getTotPaginas()){
            $this->pagAtual = 0;
        } else {
            $this->pagAtual -1;
        }
    }



}



?>
