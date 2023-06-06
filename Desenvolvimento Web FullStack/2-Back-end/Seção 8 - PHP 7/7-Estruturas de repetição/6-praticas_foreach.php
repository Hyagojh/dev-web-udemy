<html>

<head>
    <meta charset="UTF-8">
    <title>Práticas com For Each</title>
</head>

<body>
    <?php

    /* foreach($funcionarios as $idx => $nome_funcionario){
        echo "ID {$idx} - Nome: {$nome_funcionario}  <br />";
    } */


    $funcionarios = array(
        array('nome' => 'João', 'salario'=> 2500, 'data_nascimento' => "06/03/1970"),
        array('nome' => 'Maria', 'salario'=> 3000),
        array('nome' => 'Júlia', 'salario'=> 2200)
    );

    echo '<pre>';
    print_r($funcionarios);
    echo '</pre>';

 

    //idx recupera o índice, com isso o foreach sabe que em uma variável será armazenado o índice e na outra o valor, sendo ambos separados por um token.
    foreach($funcionarios as $idx => $funcionario){
        foreach($funcionario as $idx2 => $valor){
            echo "$idx2 - $valor <br />";
        }
        echo "<hr />";
    }

    ?>
</body>

</html>