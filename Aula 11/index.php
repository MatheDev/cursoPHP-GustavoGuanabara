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

    require_once 'aluno.php';
    require_once 'bolsista.php';

    //$p1 = New Visitante;

    //$p1->setNome('Mathues');
    //$p1->setIdade(23);
    //$p1->setSexo('Masculino');
    $a1 = New Aluno ;
    $a1->setNome('Carina');
    $a1->setIdade(22);
    $a1->setSexo('Feminino');
    $a1->setMatricula(112211);
    $a1->setCurso('ADM');
    $a1->pagarMensal();
    
    $b1 = New bolsista;
    $b1->setNome('Daniel');
    $b1->setIdade(12);
    $b1->setSexo('Masculino');
    $b1->setMatricula(222222);
    $b1->setCurso('GAMES');
    $b1->pagarMensal();
    
    print_r($a1);
    print_r($b1);


    ?>
    </pre>
</body>
</html>