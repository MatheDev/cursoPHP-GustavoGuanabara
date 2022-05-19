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
            // implementando as class

            require_once 'classPessoa.php';
            require_once 'classLivro.php';

            //criando vetores de pessoas passando nome, idade e sexo

            $p[0] = new Pessoa ('Matheus', 23, "M");
            $p[1] = new Pessoa ('Carina', 22, "F");
            $p[2] = new Pessoa ('Daniel', 12, "M");
            // criando vetores de livros passando

            $l[0] = new Livro ("PHP Básico", "José da Silva", 300, $p[0]);
            $l[1] = new Livro ("PHP POO", "Maria José", 250, $p[1]);
            $l[2] = new Livro ("PHP Teoria", "Ronaldo Fenomeno", 170, $p[2]);

            $l[0]->abrir();
            $l[0]->folhear(9000);
            $l[0]->voltarPag();
            $l[0]->detalhes();

            
            $l[1]->detalhes();
            $l[2]->detalhes();
    
        ?>
    </pre>
</body>
</html>