<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos Especiais</title>
</head>
<body>
    <pre>
    <?php

        require_once 'classeCanetaMetodosEspeciais.php';
        $c1 = New Caneta("BIC","AZUL",0.5);
        $c2 = New Caneta ("BIC2","VERDE",1.0);
        //$c1->setPonta(0.5);  // Aqui poderá ser acessada normalmente assim -> $c1.modelo = "bic";
        //$c1->setModelo("BIC"); // Já aqui não poderá ter o acesso, pois o método é privado.
        print_r($c1);
        print_r($c2);


    ?>
    </pre>
</body>
</html>