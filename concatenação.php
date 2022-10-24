<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
</head>
<body>
    <?php 
        $nome = "Moe Suzuki";

        echo 'Sinto falta da minha princesa, '. $nome . '.';
        echo '<br>';
        echo "$nome"; // mais lento
    ?>
</body>
</html>