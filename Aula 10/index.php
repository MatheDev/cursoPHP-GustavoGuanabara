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
    require_once 'pessoa.php';  
    require_once 'aluno.php';  
    require_once 'professor.php';  
    require_once 'funcionario.php';  

    $p1 = new Pessoa();
    $p2 = new Aluno();
    $p3 = new Professor();
    $p4 = new funcionario();
    
    $p1->setNome('Matheus');
    $p2->setNome('Carina'); 
    $p3->setNome('Vanusa');
    $p4->setNome('Daniel');
    
    $p1->setSexo('M');
    $p2->setSexo('F');
    $p3->setSexo('F');
    $p4->setSexo('M');

    $p2->setCurso('Administração');
    $p3->setSalario(2500.75);
    $p4->setSetor('Estoque');

    print_r($p1);
    print_r($p2);
    print_r($p3);
    print_r($p4);

    ?>
    
    </pre>
</body>
</html>