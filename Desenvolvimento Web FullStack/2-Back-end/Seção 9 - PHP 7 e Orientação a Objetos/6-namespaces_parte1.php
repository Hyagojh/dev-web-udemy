<?php

	/*
		namespaces possibilitam o agrupamento de classes, interfaces, funções e constantes visando evitar o conflito entre os respectivos nomes. Implementado inicialmente para resolver o conflito de nomes nativos e de bibliotecas pré existentes.
	*/

	//A partir desse ponto do script, o namespace será o A
	namespace A;

	//implementa a interface definida no namespace B
	class Cliente implements \B\CadastroInterface {
		public $nome = 'Jorge';

		public function __construct() {
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}

		public function __get($attr) {
			return $this->$attr;
		}

		public function salvar() {
			echo 'Salvar';
		}

		public function remover() {
			echo 'Remover';
		}
	}

	interface CadastroInterface {
		public function salvar();
	}


	//A partir desse ponto do script, o namespace será o B
	namespace B;

	//implementa a interface definida no namespace A 
	class Cliente implements \A\CadastroInterface {
		public $nome = 'Jamilton';

		public function __construct() {
			echo '<pre>';
			print_r(get_class_methods($this));
			echo '</pre>';
		}

		public function __get($attr) {
			return $this->$attr;
		}

		public function remover() {
			echo 'Remover';
		}

		public function salvar() {
			echo 'Salvar';
		}
	}

	interface CadastroInterface {
		public function remover();
	}


	/*
		Nesse ponto, estamos no namespace B, então uma instância sendo realizada de maneira comum, instanciaria um objeto cliente do namespace B, então usa-se as barras para a diferenciação
	*/

	$c = new \B\Cliente();
	print_r($c);
	echo $c->__get('nome');