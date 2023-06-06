<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de condição</title>
</head>
<body>

    <?php 
        /*
            Os operadores condicionais, quanto os lógicos são os mesmos do JS, com idêntico. Porém 'diferente' pode ser escrito como '<>' e existe o operador lógico xor = verdadeiro apenas se uma das expressões for verdadeira, mas não ambas. 'E' e 'ou' podem ser escritas em inglês: and e or. 
         */

         if(true <> false) {

            echo 'Verdadeiro<br/>';

         } else {

            echo 'Falso';

         }

         if(!(5 == 3 XOR 10 > 3)) {

            echo 'Verdadeiro';

         } else {

            echo 'Falso';

         }

        //pratica
        $usuario_possui_cartao_loja = true;
        $valor_compra = 250;
    
        $valor_frete = 50;
        $recebeu_desconto_frete = true;
    
        if ($usuario_possui_cartao_loja  && $valor_compra >= 400) {
            $valor_frete = 0;
      
        } else if ($usuario_possui_cartao_loja  && $valor_compra >= 300) {
            $valor_frete = 10;
      
        } else if ($usuario_possui_cartao_loja  && $valor_compra >= 100) {
            $valor_frete = 25;
      
        } else {
            //...
            $recebeu_desconto_frete = false;
        }
    
        ?>
    
        <h1>Detalhes do pedido</h1>
        <p>Possui cartão da loja?
            <?php
            if ($usuario_possui_cartao_loja) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            }
            ?>
        </p>
    
        <p>Valor da compra: <?= $valor_compra ?></p>
    
        <p>Recebeu desconto no frete?
            <?php
            if ($recebeu_desconto_frete) {
                echo 'SIM';
            } else {
                echo 'NÃO';
            }
            ?>
        </p>
    
        <p>Valor do frete: <?= $valor_frete ?></p>
        
        <?php

            /*
                Operador ternário: funcionamento padrão -> <condicao> ? true : false

                refactor do praticando
            */

            $usuario_possui_cartao_loja == true ? 'SIM' : 'NÃO';

            //atribuindo o retorno do operador ternário
            $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';

            /*
                é possível criar operadores ternários encadeados, mas não é uma recomendação, apenas para fins didáticos
            */

            /*
                atribui 0 ao valor frete ou retorna outro operador ternário. Parênteses opcionais, facilitam visualização
            */
            $valor_frete_aux = $usuario_possui_cartao_loja and $valor_compra >= 400 ? 0 : 
            ($usuario_possui_cartao_loja and $valor_compra >= 300 ? 10 : ($usuario_possui_cartao_loja and $valor_compra >= 100 ? 25 : $valor_frete));

            $recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

            $valor_frete = $valor_frete_aux;

            /*
                SWITCH - Funcionamento normal, porém, diferentemente do JS o operador de comparação usado é o '==' e não o idêntico
            */

            $parametro= '2';

            switch($parametro) {
                case 1:
                    break;

                case 2:
                    echo 'SWITCH';
                    break;

                default:
                    echo 'DEFAULT';
                    break;
            }
        ?>
    
</body>
</html>