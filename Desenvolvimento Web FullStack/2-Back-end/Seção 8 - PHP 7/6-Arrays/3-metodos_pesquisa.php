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
        in_array(oq procurar, onde procurar) -> true ou false (1 ou vazio) para a existência doq está sendo procurado

        array_search(oq procurar, onde procurar) -> retorna o índice do valor pesquisado, caso ele exista. Se não existir retorna 'null' e não false.
    */

    $listas_coisas = [];
    
    $listas_coisas['frutas'] = [ 1 => 'Banana', 2 =>  'Maça', 3 =>  'Morango', 4 =>  'Uva'];
    $listas_coisas['pessoas'] = array(1 => 'João', 2 =>  'José', 3 => 'Maria');

    echo '<pre>';
    print_r($listas_coisas);

    echo '<hr>';

    //echo in_array('João', $listas_coisas['pessoas']);
    //echo '<br>';

    echo in_array('Abacate', $listas_coisas['frutas']);

    echo array_search('Maça', $listas_coisas['frutas']);


    ?>
</body>
</html>