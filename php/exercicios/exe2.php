<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - Funções</title>
</head>
<body>
    <?php
    
        function calcularsalario($salario){
            $imposto = 0;
            if($salario > 0 && $salario <= 1903.98){
                $imposto = 0;
            }else if($salario >= 1903.99 && $salario <=  2628.65){
                $imposto = ($salario*7.5)/100;
            }else if($salario >= 2628.66 && $salario <= 3751.05){
                $imposto = ($salario*15)/100;
            }else if($salario >= 3751.06 && $salario <= 4664.68){
                $imposto = ($salario*22.5)/100;
            }else if($salario > 4664.68){
                $imposto = ($salario*27.5)/100;
            }

            return $imposto;
        }

        echo calcularsalario(2000);
    ?>
</body>
</html>