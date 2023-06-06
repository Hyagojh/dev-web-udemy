<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilar - Polimorfismo</title>
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

            function trocarMarcha() {
                echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
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
            //polimorfismo
            function trocarMarcha() {
                echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
            }
        }

        $chevette = new Carro('ABC567', 'Azul');
        $fazer = new Moto('IVS765', 'Branca');

        $chevette->trocarMarcha();
        echo '<br>';
        $fazer->trocarMarcha();
    ?>
</body>
</html>