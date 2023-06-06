<?php

    /*
        é comum lançar exceções customizadas, que podem ser criadas através da extensão da classe excpetion. Basta em algum lugar do código criar uma classe q extenderá Excpetion, para que o throw n seja mais um instanciamento da classe Exception e sim dá ExceptionCustomizada.

        Error -> base para lançamentos internos do PHP
        Exception -> Muito comum para os desenvolvedores, assim como as customizadas
    */

    class MinhaExceptionCustomizada extends Exception {
        private $erro = '';

        public function __construct($erro) {
            $this->erro = $erro;
        }

        public function exibirMensagemErroCustomizada() {
            echo '<div style="border: solid 1px #000; padding: 15px; background-color: red; color:white">';
                echo $this->erro;
            echo '</div>';
        }
    }

    try {

        throw new MinhaExceptionCustomizada('Esse é um erro de teste');

    } catch(MinhaExceptionCustomizada $e) {
        $e->exibirMensagemErroCustomizada();
    }

?>