<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para tarefas matemáticas</title>
</head>
<body>
    
    <?php

        /*
            ceil($numero) -> arredonda para cima

            floor($numero) -> arredonda pra baixo

            round($numero) -> arredonda o valor com basse nas casas decimais

            rand() -> gera um inteiro aleatório

            sqrt($numero) -> retorna raiz quadrada
        */

        $numero = 9.7;

        //echo ceil($numero);
        //echo floor($numero);
        //echo round($numero);
        //echo rand(0, 10); gera um valor aleatório 0 até randmax, depende do SO. Também posso definir o tamanho do intervalo.
        echo getrandmax();
        echo '<br>';
        echo sqrt($numero);
        
    ?>

</body>
</html>