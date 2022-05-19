<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Pessoa Lendo Livro</title>
</head>
<body>
    <pre>
    <?php

    $p[0] = new Pessoa ('Matheus', 23, 'M');
    $p[1] = new Pessoa ('Vanusa', 48, 'F');

    

    $l[0] = new Livro ('EXE PHP', 'GUSTAVO GUANABARA', 300,$p[1]);
    $l[1] = new Livro ('EXE PHP 2','GUGA GUANABARA', 500, $p[0]);

    $l[0]->abrir();
    $l[0]->detalhes();

    print_r($)
    
    print_r($p[0]);


    ?>
    
    </pre>
</body>
</html>