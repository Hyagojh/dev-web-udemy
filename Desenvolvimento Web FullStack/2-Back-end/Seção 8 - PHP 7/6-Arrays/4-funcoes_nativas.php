<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para manipular arrays</title>
</head>
<body>
    <?php 

        /*
            is_array(array) -> verifica se o parâmetro é um array;

            arrays_keys(array) -> retorna todas as chaves de um array;

            sort(array) -> ordena um array e reajusta seus índices modo alfabético;

            asort(array) -> ordena um array preservando ses índices;

            count(array) -> conta a quantidade de elementos de um array;

            array_merge(array) -> funde um ou mais arrays

            explode(array) -> divide uma string baseada em um delimitador

            implode(array) -> junta elementos de um array em uma string
        */

        /*
            $array = 'String';
            $retorno = is_array($array);

            Retorna falso pois não é array;
        */

        /*
            $array = [1 => 'a', 7 => 'b', 18 => 'c'];

            echo '<pre>';
            print_r ($array);

            $chaves_array = array_keys($array);
            echo '<pre>';
            print_r ($chaves_array);
        */

        /*
            $array = ['teclado', 'mouse', 'cabo hdmi', 'notebook', 'fonte atx'];

            sort($array); //retorna true ou false para tentativa de ordenação

            echo '<pre>';
            print_r($array);
        */

        /*
            $array = ['teclado', 'mouse', 'cabo hdmi', 'notebook', 'fonte atx'];

            asort($array); //retorna true ou false para tentativa de ordenação

            echo '<pre>';
            print_r($array);
        */

        /*
            $array = ['teclado', 'mouse', 'cabo hdmi', 'notebook', 'fonte atx'];

            echo count($array); 
        */

        /*
            $array1 =['osx', 'windows'];
            $array2 = array('linux');
            $array3 = ['solaris'];

            $novo_array = array_merge($array1, $array2, $array3);

            echo '<pre>';
            print_r($novo_array);
        */

        /*
            $string = '26/04/2018';

            $array_retorno = explode('/', $string); 
            //parâmetro delimitador de cada um dos subconjuntos que se quer dividir e a string a se quebrar

            echo '<pre>';
                print_r($array_retorno);
        */

            $array = ['a', 'b', 'x', 'y'];

            $string_retorno = implode(',', $array); //1 = caractere desejado entre as strings concatenadas

            echo '<pre>';
                echo $string_retorno;

    ?>
</body>
</html>