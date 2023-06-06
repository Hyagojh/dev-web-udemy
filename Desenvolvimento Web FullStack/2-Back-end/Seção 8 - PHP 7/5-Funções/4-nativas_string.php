<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para manipulação de string</title>
</head>
<body>
    
    <?php

        /*
            strtolower($texto) -> Transforma todos os caracteres em minúsculos

            strtoupper($texto) -> '' '' maiúsculo

            ucfirst($texto)  -> apenas primeira caracter em maiúsculo

            strlen($texto) -> conta a quantidade de caracteres de uma string

            str_replace(<procura por>, <substitui por>, $texto) -> substitui uma cadeia por outra dentro  deuma string

            substr($texto, <posicao inicial>, <qtde caracteres>) -> retorna parte de uma string

        */

        $texto = 'curso completo de PHP';

        echo $texto;
        echo '<br>';

        //echo strtolower($texto);
        //echo strtoupper($texto);
        //echo ucfirst($texto);
        //echo strlen($texto);
        echo str_replace('curso', 'treinamento', $texto);
        echo '<br>';
        echo substr($texto, 0, 14). '...';

    ?>

</body>
</html>