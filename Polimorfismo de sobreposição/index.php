<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <pre>
        
        <?php

        require_once 'mamifero.php';
        require_once 'reptil.php';
        require_once 'peixe.php';
        require_once 'ave.php';
        require_once 'canguru.php';
        require_once 'cachorro.php';
        require_once 'arara.php';
        require_once 'cobra.php';
        require_once 'goldfirsh.php';
        require_once 'tartaruga.php';


        $m = New Mamifero();
        $r = New Reptil();
        $a = New Ave();
        $p = New Peixe();
        $cachorro = New Cachorro;
        $canguru = New Canguru;
        $tartaruga = New Tartaruga();



        $m->setPeso = 33.6;
        $m->locomover();
        $r->locomover();
        $a->locomover();
        $p->locomover();
        $canguru->locomover();
        $cachorro->locomover();
        $tartaruga->locomover();

        $cachorro->emitirSom();
        $m->emitirSom();
        $canguru->emitirSom();
        



        ?>
        
        
        </pre>



</body>
</html>