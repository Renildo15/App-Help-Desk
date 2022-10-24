<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Funções</title>
</head>
<body>
    <?php
        function exibirBoasVindas(){
            echo 'Seja bem vindo!<br>';
        };

        function calcularArea($largura, $comprimento){
            $area = $largura * $comprimento;

            return $area;
        }

        exibirBoasVindas();

        echo calcularArea(15,20);
    ?>
</body>
</html>