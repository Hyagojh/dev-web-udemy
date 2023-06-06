<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Lógica básica - Introdução</title>   

</head>
<body>
    <?php
        /*
            PHP é uma linguagem interpretada, assim como JS, focada em server-side. Pode ser incluida em qualquer posição do código, desde que o arquivo tenha a extensão .php. Arquivos .php é interpretado pelo interpretador antes da saída html à quem fez a requisição da página. ';' é obrigatório.
            
           As instruções não ficam anexadas no console às instruções HTML, o que acontece é que o Php interpreta a instrução, identifica a saída e adiciona ao conteúdo do body do html, as codificações php não são entregues ao navegador, pois o mesmo não tem inteligência pra interpretar php, o html precisa vir pronto do back-end para ser entregue e apresentado no browser.

           ###Páginas estáticas e dinâmicas###
           
           Estática: O cliente faz uma requisição HTML, cujo código já está definida, o servidor HTTP só entrega a página pronta.
           
           Dinâmica: A requisião é feito a um arquivo .php, onde no servidor existirá o interpretador que atuará em cima dessa requisição (script indicado pelo servidor), a interpretação PHP produz um HTML e reenvia para o servidor que forma uma resposta e que será encaminhada ao cliente.

           Tipos de variáveis em PHP: string, int, float, boolean, array.

           Devem iniciar obrigatoriamente com o caractere '$', as demais regras de nomes são as padrões. É case sensitive e fracamente tipada.
        */

        /*
            variavel constante, para criar ela é preciso chamar uma função e passar dois parâmetros: primeiro o nome da variável e segundo um valor (obrigatório). Boa prática -> caixa alta.
        */

        define('BD_URL', 'endereco_bd_dev');

        //tentando modificar
        // define('BD_URL', 'endereco');
       
        //variavel normal
        $nome = 'Hyago'; //string
        $idade = 21; //int
        $peso = 75.7; //float
        $fumante = true; //boolean (true = 1) (false = vazio)

        //em aspas duplas dispensam a quebra para referencia de variável, pois aspas duplas sempre verifica se tem variáveis, se tornando mais lenta por isso. Ex
        echo "Utilizando a tag padrão. Curso de PHP feito por $nome <br/>";
        echo 'Utilizando a tag padrão. Curso de PHP feito por '.$nome.'<br/>';
        /*
            echo e print tem funções identicas é uma função e pode assumir sintaxe de função, e retorna caso ocorra bem retorna 1, se não retorna 0
        */
        print 'Utilizando a tag padrão<hr/>';

        /*
            CASTING de tipos (converter um tipo para outro)
        */

        $valor = 10; //int ou integer
        $valor2 = (float) $valor; //float, double, real
        //inteiro para string
        $valor3 = (string) $valor;
        
        echo $valor. ' '. gettype($valor);
        echo '<br>';
        echo $valor2. ' '. gettype($valor2);
        echo '<br>';
        echo $valor3. ' '. gettype($valor3);

        /*
            Operadores aritméticos funcionam como o padrão. Assim como incremento e decremento
        */

    ?>

    <br>
    
    <!--Funciona como um atalho, é a tag que imprimi coisas na tela diretamente dentro do conteúdo HTML-->
    <?= 'Utilizando a tag de Impressão';?>

    <br>
    <?
        //é necessário habilitar essa tag.
       echo 'Utilizando tag curta';
    ?>

    <h1>Ficha Cadastral</h1>
    <br>
    <!--Usando tag de impressão para imprimir a variável nome-->
    <p>Nome: <?= $nome?></p>
    <p>Idade: <?= $idade?></p>
    <p>Peso: <?= $peso?></p>
    <p>Fumante: <?= $fumante?></p>

</body>
</html>