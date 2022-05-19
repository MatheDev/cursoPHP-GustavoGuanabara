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
        require_once 'classConta.php';

        
        $p1 = New ContaBanco();
        $p2 = New ContaBanco();

        $p1->abrirConta("CC");
        $p1->setDono("JUBILEU");
        $p1->setNumConta(1111);
        $p2->abrirConta("CP");
        $p2->setDono("CREUZA");
        $p2->setNumConta(2222);
        
        $p1->pagarMensalidade();
        $p2->pagarMensalidade();

        $p1->sacar(38);
        $p2->sacar(130);

        $p1->fecharConta();
        $p2->fecharConta();
        
        print_r($p1);
        print_r($p2);
    ?>
    </pre>
</body>
</html>