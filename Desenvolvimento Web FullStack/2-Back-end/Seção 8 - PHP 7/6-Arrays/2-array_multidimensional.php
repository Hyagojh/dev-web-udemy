<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays multidimensionais</title>
</head>
<body>
    <?php 
    
    /*
        Arrays multidimensionais: arrays de arrays, onde em uma posição do array, existe outro array.
    */

    $listas_coisas = [];
    
    $listas_coisas['frutas'] = [ 1 => 'Banana', 2 =>  'Maça', 3 =>  'Morango', 4 =>  'Uva'];
    $listas_coisas['pessoas'] = array(1 => 'João', 2 =>  'José', 3 => 'Maria');

    echo '<pre>';
    print_r($listas_coisas);

    echo '<hr>';

    echo $listas_coisas['frutas'][3];

    echo '<br>';

    echo $listas_coisas['pessoas'][2];


    ?>
</body>
</html>