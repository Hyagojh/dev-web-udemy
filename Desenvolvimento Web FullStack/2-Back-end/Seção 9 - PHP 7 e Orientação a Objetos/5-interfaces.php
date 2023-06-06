<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaces</title>
</head>
<body>
    <?php

        interface equipamentosEletronicos {
            public function ligar();
            public function desligar();
        }

        class Geladeira implements equipamentosEletronicos {
            public function ligar() {
                echo 'Ligar';
            }
            
            public function desligar() {
                echo 'Desligar';
            }

            public function abrirPorta() {
                echo 'Abrindo a porta';
            }
        }

        class TV implements equipamentosEletronicos{
            public function ligar() {
                echo 'Ligando a Tv';
            }
            
            public function desligar() {
                echo 'Desligando a Tv';
            }

            public function trocalCanal() {
                echo 'Trocando o canal';
            }
        }

        $x = new Geladeira();
        $y = new TV();

        /*Mais de uma interface sendo utilizada*/

        interface MamiferoInterface {
            public function respirar();
        }
    
        interface TerrestreInterface {
            public function andar();
        }
    
        interface AquaticoInterface {
            public function nadar();
        }
    
        class Humano implements MamiferoInterface, TerrestreInterface {
            public function andar() {
                echo 'Andar';
            }
    
            public function respirar() {
                echo 'Respirar';
            }
    
            public function conversar() {
                echo 'Conversar';
            }
        }
    
        class Baleia implements MamiferoInterface, AquaticoInterface {
            public function respirar() {
                echo 'Respirar';
            }
    
            public function nadar() {
                echo 'Nadar';
            }
    
            protected function esguichar() {
                echo 'Esguichar';
            }
        }
    
        //herança com interfaces
    
        interface AnimalInterface {
            public function comer();
        }
    
        interface AveInterface extends AnimalInterface {
            public function voar();
        }
    
        class Papagaio implements AveInterface {
            public function voar() {
                echo 'Voar';
            }
    
            public function comer() {
                echo 'Comer';
            }
        }
    ?>
</body>
</html>