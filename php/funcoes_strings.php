<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Strings - PHP</title>
</head>
<body>
    <?php
        $texto = "Sinto sua falta! Por favor, volte logo!";
        ///Caixa baixa
        echo strtolower($texto) . '<br>';
        ///caixa baixa
        echo strtoupper($texto) . '<br>';
        ///Primeiro caracter maiusculo
        echo ucfirst($texto) . '<br>';
        ///Tamanho da string
        echo strlen($texto) . '<br>';
        ///Seve para substituir uma determinada cadeia de caracteres
        echo str_replace('!',", Moe-chan!", $texto) . '<br>';
        ///retorna uma parte de uma string
        echo substr($texto,0, 20);
    ?>
</body>
</html>