<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pilar - Abstração</title>
</head>
<body>
    <?php

        class Funcionario {
            
            public $nome = 'José';
            public $telefone = '11 99999-8888';
            public $numFilhos = 2;
            public $cargo = null;
            public $salario = null;
            /*
                atributos e métodos estáticos podem ser acessados sem que seja necessária a instância de uma classe. Onde o atributo não é acessível através do operador '->'. método não deve utilizar $this, pois métodos estáticos não necessitam instâncias.
            */
            public static $atributoEstatico = 'Eu sou um atributo estático';

            public static function exemploEstatico() {
                echo 'Eu sou um método estático';
            }

            /*
                Método construtor e destruct, são também considerados métodos mágicos q fazem parte do ciclo de vida de um objeto, pois ao instanciar um ou outro é executado. Um executa quando a instancia é criada e o outro quando a mesma é removida da memória.
            */

            function __construct($nome) {
                $this->__set('nome', $nome);
            }

            function __destruct() {
                echo 'Objeto removido';
            }

            function resumirCadFunc() {
                //this ajusta o contexto, para o atributo do objeto em questão
                return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') . ' filhos(s)';
            }

            //um setter sem ser setter
            function modificarNumFilhos($numFilhos) {
                //afeta um atributo do objeto
                $this->numFilhos = $numFilhos;
            }

            //setters
            function setNome($nome) {
                $this->nome = $nome;
            }

            function setTelefone($telefone) {
                $this->telefone = $telefone;
            }

            //getters
            function getNome() {
                return $this->nome;
            }

            function getTelefone() {
                return $this->telefone;
            }

            function getNumFilhos() {
                return $this->numFilhos;
            }

            /*
                métodos mágicos - overloading (sobrecarga), que tem na sua ideia criar apenas um método get e um método set capaz de se adaptar ao atributo que queremos manipular. Ex: O atributo passado por parãmetro será adicionado ao contexto dos atributos existentes e receberá o valor. O que falamos ao interpretador é para que na hora de referenciar o atributo que irá sofrer alteração, ele primeiro faça a substituição do conteúdo da variável para ai sim atribuir o valor.
            */

            function __set($atributo, $valor) {
                $this->$atributo = $valor;
            }

            function __get($atributo) {
                return $this->$atributo;
            }
        }

        $y = new Funcionario('Maria');
        echo $y->resumirCadFunc();

        echo '<br>';

        $y->modificarNumFilhos(3);
        echo $y->resumirCadFunc();

        echo '<hr>';

        $x = new Funcionario('Carlos');
        echo $x->resumirCadFunc();

        echo '<br>';

        $x->modificarNumFilhos(5);
        echo $x->resumirCadFunc();

        echo '<br>';
        echo '<hr>';

        //praticando getters and setters
        $x->setNome('João');
        echo $x->getNome();

        echo '<hr>';

        $y->setNome('Hyago');
        echo $y->getNome(). ' possui ' . $y->getNumFilhos() . ' filho(s)';

        echo '<br>';
        echo '<hr>';

        //overloading
        $z = new Funcionario('José');
        $z->__set('nome', 'Maria');
        $z->__set('numFilhos', 1);
        echo $z->__get('nome'). ' possui ' . $z->__get('numFilhos') . ' filho(s)';

        echo '<br>';
        unset($x);

        /*
            Atributos e métodos estáticos dispensam a instância de um objeto para serem utilizados

            chamada de método e atributo estático. Chamar um atributo não estático com o operador de resolução de escopo (::) não funcionará, porém, a chamada de um método não estático funcionará, isso pode ser considerado uma falha do PHP.  
        */
        echo Funcionario::$atributoEstatico;
        echo '<br>';
        Funcionario::exemploEstatico();

    ?>
</body>
</html>