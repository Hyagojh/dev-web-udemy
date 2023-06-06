<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilar - Encapsulamento</title>
</head>
<body>
    <?php

    /*
        Nada de muito diferente em relação ao habitual Java. O método set, no caso de herança, onde a classe mãe tem um atributo privado a class filha não conseguirá acessar, porém oq o método set fará ao tentar mudar o valor do atributo é criar dinamicamente um atributo publico na classe filha de mesmo nome da do pai. 
        
        Porém, métodos mágicos conseguem acessar esses diferentes contextos, mas as mudanças ocorrerão no contexto em q ele foi implementado. Por exemplo: ao usar o método __get ou __set herdado, a classe filha vai conseguir fazer alterações no objeto pai e não apenas nela
    */

        class Pai {
            private $nome;
            protected $sobrenome;
            public $humor;

            public  function __get($atributo) {
                return $this->$atributo; 
            }

            public function __set($atributo, $valor) {
                $this->$atributo = $valor;
            }

            private function executarMania() {
                echo 'Assobiar';
            }

            protected function responder() {
                echo 'Oi';
            }

            public function executarAcao() {
                echo 'Executar ação';
            }
        }

        class Filho extends Pai {
            private $nome;
            private $idade;

            public function __get($atributo) {
                return $this->$atributo;
            }

            public function __set($atributo, $valor) {
                $this->$atributo = $valor;
            }

            private function executarMania() {
                
            }
        }

        $pai = new Pai();
        echo '<pre>';
        print_r($pai);

        $filho = new Filho();
        echo '<pre>';
        print_r($filho);
        
        echo $filho->__get('humor');
        $filho->__set('humor', 'triste');
        echo '<br>';

        echo $filho->__get('humor');

    ?>
</body>
</html>