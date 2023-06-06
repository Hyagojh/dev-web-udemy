<?php

    session_start();

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
    #PHP EOL (end of line), indicará quando acaba um chamado e começa outro
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    /*
        abre um arquivo de texto, esperando dois parâmetros: nome do arquivo (caso não exista, é criado) e o segundo parâmetro seria a intenção -> abrir, fechar ou somente ler o arquivo... 'a' é somente para escrita
    */

    $arquivo = fopen('arquivo.txt', 'a');

    /*
        espera a referência do arquivo e o que é para ser escrito dentro do arquivo
    */

    fwrite($arquivo, $texto);

    fclose($arquivo);

    header('Location: abrir_chamado.php');

?>