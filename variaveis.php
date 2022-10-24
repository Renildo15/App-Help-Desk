<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>
    <?php
        //String
        $nome = "Moe Suzuki";
        //int
        $idade = 22;
        //float
        $peso = 60.5;
        //boolean
        $fumante = false;

    ?>
    <h1>Ficha Cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante ?></p>
</body>
</html>