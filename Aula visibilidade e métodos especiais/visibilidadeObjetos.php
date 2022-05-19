<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
     require_once 'ClasseCanet.php';
     $c1 = New Caneta ;
     $c1->modelo = "Bic Cristal";
     $c1->cor = "Azul";
    // $c1->ponta = 0,5; esse atributo so poderá ser feito dentro da classe, pois ele é privado e o mesmo sendo protegido.
    /*
        Métodos públicos podem alterar os valores de atributos privados e protegidos.
    */
    $c1->rabiscar();
    print_r($c1);

    ?>
    </pre>
</body>
</html>