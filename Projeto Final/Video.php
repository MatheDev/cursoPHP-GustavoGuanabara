<?php

require_once 'interface.php';

class Video implements AcoesVideo {

    


private $titulo, $avaliacao, $views, $curtidas, $reproduzindo;


public function __construct($titulo){
    $this->titulo = $titulo;
    $this->avaliacao = 1;
    $this->views = 0;
    $this->curtidas = 0;
    $this->Reproduzindo = false;
}




// Métodos  da interface

public function like(){
    $this->curtidas ++ ;
}

public function pause(){
    $this->reproduzindo = false;
}

public function play(){
    $this->reproduzindo = true;

}

// Métodos especiais 

public function setTitulo($titulo){
    $this->titulo = $titulo;
}

public function getTitulo(){
    return $this->titulo;
}

public function setTAvaliacao($avaliacao){
    $this->avaliacao = $avaliacao;
}

public function getTAvaliacao(){
    return $this->avaliacao;
}

public function setTViews($views){
    $this->views = $views;
}

public function getViews(){
    return $this->views;

}
public function setTCurtidas($curtidas){
        $this->curtidas = $curtidas;
    }
    
public function getCurtidas(){
        return $this->curtidas;
    }

    public function setReproduzindo($reproduzindo){
        $this->views = $reproduzindo;
    }
    
    public function getReproduzindo(){
        return $this->reproduzindo;
    }
    





}


?>