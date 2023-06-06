<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilar - Herança</title>
</head>
<body>
    <?php
        class Veiculo {

            public $placa = 'ABC1234';
            public $cor = 'Branco';
          
            function acelerar() {
                echo 'Acelerando';
            }

            function freiar() {
                echo 'Freiando';
            }
        }

        class Carro extends Veiculo {

            function __construct($placa, $cor) {
                $this->placa = $placa;
                $this->cor = $cor;
            }

            public $teto_solar = true;

            function abrirTetoSolar() {
                echo 'Abrindo teto solar';
            }

            function alterarPosicaoVolante() {
                echo 'Alterando a posição do volante';
            }
        }


        class Moto extends Veiculo {

            function __construct($placa, $cor) {
                $this->placa = $placa;
                $this->cor = $cor;
            }

            public $contra_peso_guidao = true;

            function empinar() {
                echo 'Empinando a moto';
            }
        }

        $chevette = new Carro('ABC567', 'Azul');
        $fazer = new Moto('IVS765', 'Branca');

        echo '<pre>';
        print_r($chevette);

        echo '<pre>';
        print_r($fazer);

        
        echo '<br>';
        echo '<hr>';

        $chevette->freiar();
        echo '<br>';
        $fazer->acelerar();

    ?>
</body>
</html>