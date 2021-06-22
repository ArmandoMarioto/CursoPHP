<html>
    <head>
        <meta charset="utf-8" />
        <title>Curso Php</title>
    </head>

    <body>
        <?php
            //String
            $nome = 'Armando Marioto Neto';
            //Int
            $idade = 25;
            //Float
            $peso = 96.5;
            //Boolean
            $fumante = false;
        ?>
        <h1>Ficha Cadastral</h1>
        <br/>
        <p>Nome: <?= $nome?> </p>
        <p>Idade: <?= $idade?> </p>
        <p>Peso: <?= $peso?> </p>
        <p>Fumante: <?= $fumante?> </p>
    </body>
</html>