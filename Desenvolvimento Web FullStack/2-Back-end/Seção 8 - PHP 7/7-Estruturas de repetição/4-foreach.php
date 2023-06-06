<html>

<head>
    <meta charset="UTF-8">
    <title>For Each</title>
</head>

<body>
    <?php
    $itens = array('sofá', 'mesa', 'cadeira', 'fogão', 'geladeira');

    echo '<pre>';
    print_r($itens);
    echo '</pre>';

    /*
        especializado em arrays de objetos. Primeiro parâmetro é o array e o segundo é  uma variável que vai receber o valor contido em cada um dos índices percorridos.
    */
    foreach ($itens as $item) {
        echo "$item ";
        if ($item == 'mesa') {
            echo "(*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)";

        }
        echo '<br />';
    }

    ?>
</body>

</html>