<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para manipular datas</title>
</head>
<body>
    
    <?php

        /*
            date(formato) -> recuperar a data atual

            date_default_timezone_get(timezone) -> recupera o timezone default da aplicação

            date_default_timezone_set(timezone) -> atualiza o timezone default da aplicação

            strtotime(data) -> transformar datas textuais em segundos

            timezone pode ser alterado no php.ini também
        */


        //echo date('d/m/Y H:i'); existem parâmetros (consultar documentação)
        echo date_default_timezone_get();
        echo '<br>';
        date_default_timezone_set('America/Sao_Paulo');
        echo date_default_timezone_get();
        echo '<br>';
        echo date('d/m/Y H:i');

        echo '<br>';
        echo '<br>';
        echo '<hr>';

        //calculo entre datas

        $data_inicial = '2018-04-24';
        $data_final = '2018-05-15';

        /*
            timestamp (representação de tempo), a partir de 01/01/1970, levando em consideração essa data. 01/01/1970 à 06-05-2020
        */

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        $resultado = $time_final - $time_inicial;
        echo $resultado; //em segundos
        
        $resultado /= 60; //minutos
        $resultado /= 60; //horas
        $resultado /= 24; //dias

        echo '<br>';
        
        echo $resultado;

    ?>

</body>
</html>