<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    
    <?php

    function exibirBoasVindas() {
        echo 'Bem-vindo ao curso de PHP';
    }

    function calcularAreaTerreno($largura, $comprimento) {
       
        $area = $largura * $comprimento;

        return $area;

    }

    exibirBoasVindas();

    echo '<br>';

    echo $resultado = calcularAreaTerreno(10, 10);
    
    ?>

</body>
</html>