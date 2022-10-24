<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>False, Null e Empty</title>
</head>
<body>
    <?php
        $funcionario1 = null;
        $funcionario2 = "";

        if(is_null($funcionario1)){
            echo "Sim, a variável é null! <br>";
        }else{
            echo "Não, a variavel não é nula! <br>";
        }

        if(is_null($funcionario2)){
            echo "Sim, a variável é null! <br>";
        }else{
            echo "Não, a variavel não é nula! <br>";
        }
        if(empty($funcionario2)){
            echo "Sim, a variável é vazia! <br>";
        }else{
            echo "Não, a variavel não é vazia! <br>";
        }
        if(empty($funcionario1)){
            echo "Sim, a variável é vazia! <br>";
        }else{
            echo "Não, a variavel não é vazia! <br>";
        }
    ?>
</body>
</html>