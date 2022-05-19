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
       require_once 'ClasseCanet.php';
       $c1 =  New caneta;
        $c1->cor = "Azul";
        $c1->ponta ="0,5";
        $c1->tampada = false;
        $c1->destampar();
        $c1->rabiscar();
        print_r($c1);

        $c2 = New caneta;
        $c2->cor = "Vermelha";
        $c2->carga = "50";
        $c2->tampar();
        print_r($c2);
    ?>
    </pre>
</body>
</html>