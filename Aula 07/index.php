<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeonato de lutas</title>
</head>
<body>
    <pre>
    <?php
    
    require_once "classLutador.php";
    require_once "classLuta.php";
    $lutador = array();

    $lutador[0] = new Lutador ("MATHEUS", "BRASIL", 22, 1.75, 82, 11, 5,10);
    $lutador[1] = new Lutador ("RONALDO", "FRANÇA", 33, 1.80, 82, 20, 11, 8);
    $lutador[2] = new Lutador ("RONALDINHO", "ITALIA", 35, 1,69, 69, 20, 2, 0);
    $lutador[3] = new Lutador ("MARCELO", "ESPANHA", 29, 1.79, 69, 30, 10, 5);
    $lutador[4] = new Lutador ("DANIEL", "URUGUAI", 27, 1.76, 110, 23, 12,2);
    $lutador[5] = new Lutador ("ARBOLETA", "COLOMBIA", 29, 1.80, 110, 9,2,3);
    
    
    // Marcando a luta

    $uec01 = New Luta();
    $uec01->marcarLuta($lutador[0],$lutador[1]);
    $uec01->lutar();
    $lutador[0]->status();
    $lutador[1]->status();
    

    ?>
    </pre>
</body>
</html>