<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratamento de erros</title>
</head>
<body>
    <?php
        /*
            try -> responsável por encapsular todo o conteúdo sucetível a algum erro, para identificar e controlar o mesmo. Pode ter dois destinos: catch ou finally.
            
            catch -> Captura o eventual erro, após sua execução é reencaminhada para o finally ou ainda para o throw.
            
            finally -> Instrução final do tratamento de erros. Quando o catch está implementado, finally é opcional.
            
            throw -> intencionalmente lançar um erro.
        */

        try {

            echo '<h3> *** Try ***';
            #forçar o lançamento de um erro para capturar com catch.
            #$sql = 'Select * from clientes';
            #mysql_query($sql); //erro

            #lançando execeções caso o arquivo solicitado n exista.
            if(!file_exists('require_arquivo_a.php')) {
                throw new Exception
                ('O arquivo em questão deveria estar disponível as ' .date('d/m/Y H:i:s'). ' horas mas não estava. Vamos seguir mesmo assim');
            }

        } /*catch(Error $e) {

            echo '<h3> *** Catch Erro ***';
            echo '<p style="color: red">'. $e. '</p>';
            possível armazenar em banco de dados e outras mil formas.

        }*/ catch(Exception $e) {

            echo '<h3> *** Catch Exceção ***';   
            echo '<p style="color: red">'. $e. '</p>';  

        } finally {

            echo '<h3> *** Finally ***';

        }
    ?>
</body>
</html>