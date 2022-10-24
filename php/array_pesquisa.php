<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Pesquisa</title>
</head>
<body>
    <?php
        $amigas = array("Moe","Yuuna","Sacchan");
        $lista_coisas = [
            "Amigas" => $amigas,
            "Coisas" => ["Lapis", "Borracha"]
        ];
        echo "<pre>";
        print_r($lista_coisas);
        echo "</pre>";

        echo in_array("Moe", $lista_coisas['Amigas'])
        /*
        echo "<pre>";
        print_r($amigas);
        echo "</pre>";

        $resposta = in_array("Moe",$amigas);
        $resp = array_search("Sacchan", $amigas);

        if($resposta){
            echo "Existe <br>";
        }else{
            echo "Não existe <br>";
        }

        if($resp != null){
            echo "Existe";
        }else{
            echo "Não existe";
        }
        */
    ?>
</body>
</html>