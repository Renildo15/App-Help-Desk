<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções datas</title>
</head>
<body>
    <?php
        ///token para recupera o dia
        //echo date('d');
        //echo date('D');
        /*
        date_default_timezone_set('America/Sao_Paulo');
        echo "<br>";
        echo date_default_timezone_get();
        echo "<br>";
        echo date('d/m/Y  H:i');
        ///
        */

        $data_inicial =  "2022-10-13";
        $data_final = "2022-10-28";

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);
        echo $data_inicial . " - " . $time_inicial;
        echo "<br>";
        echo $data_final . " - " . $time_final;

        $diferenca_times = abs($time_final - $time_inicial);
        echo "<br>";
        echo $diferenca_times;
        echo "<br>";
        $segundos_dia = 24 * 60 * 60;
        echo $segundos_dia;
        echo "<br>";
        $diferenca_dias = $diferenca_times/$segundos_dia;
        echo "<br>";
        echo $diferenca_dias;

    ?>
</body>
</html>