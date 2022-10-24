<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas de um array - PHP</title>
</head>
<body>
    <?php
        /*
        $array = "String";
        $retorno = is_array($array);
        
        if($retorno){
            echo "Sim, é um array!";
        }else{
            echo "Não, não é um array!";
        }
        */
        /*
        $array = [1 => 'a', 7 => 'b', 18 => 'c'];
        $chaves_array = array_keys($array);
        echo '<pre>';
        print_r($chaves_array);
        echo '</pre>';
        */
        /*
        $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'font atx', 'computador');

        echo '<pre>';
            print_r($array);
        echo '</pre>';

        sort($array);

        echo '<pre>';
            print_r($array);
        echo '</pre>';
        */
        /*
        $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'font atx', 'computador');
        
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        asort($array);

        echo '<pre>';
            print_r($array);
        echo '</pre>';
        */
        /*
        $array = array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'font atx', 'computador');
        
        echo '<pre>';
            print_r($array);
            echo count($array);
        echo '</pre>';
        */
        /*
        $array1 = ['osx', 'windows'];
        $array2 = array('Linux');
        $array3 = ['solaris'];

        $novo_array = array_merge($array1,$array2,$array3);

        echo '<pre>';
            print_r($novo_array);
        echo '</pre>';
        */
        /*
        $string = "26/04/2022";
        $array_retorno = explode('/',$string);

        echo '<pre>';
            print_r($array_retorno);
        echo '</pre>';
        */

        $array = ['a', 'b', 'x', 'y'];
        $string_retorno = implode(',',$array);

        echo '<pre>';
            print_r($string_retorno);
        echo '</pre>';

    ?>
</body>
</html>