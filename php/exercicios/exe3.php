<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
    <?php
        $bilhete = [];
        
        do {
            $numeros = rand(1,60);
            array_push($bilhete,$numeros);
        } while (count($bilhete) <= 5);

        print_r ($bilhete);

        for($i = 0; $i < count($bilhete); $i ++){
            echo "<pre>";
            echo $bilhete[$i] . " ";
            echo "</pre>";
        }
    ?>
</body>
</html>