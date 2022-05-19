<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 PHP NÃO SUPORTA O POLIMORFISMO DE SOBRECARGA !!!


<h1>
    <?php

    require_once 'Mamifero.php';
    require_once 'Lobo.php';
    require_once 'Cachorro.php';

    $c = New Cachorro();

    $c->reagirIdadePeso(2, 12.5);
    $c->reagirIdadePeso(17, 4.5);


    ?>

</h1>
</body>
</html>