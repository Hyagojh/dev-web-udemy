<?php

namespace MF\Init;

/*
	A classe bootstrap tem a intenção de abstrair os requisitos funcionais e não funcionais da aplicação, estando aqui os arquivos não funcionais que tratam da arquitetura e lógica do framework. O nome é para descrever o script de inicialização e em nada tem a ver com o framwork bs.
*/

abstract class Bootstrap {
	private $routes;

	abstract protected function initRoutes(); 

	public function __construct() {
		$this->initRoutes();
		$this->run($this->getUrl());
	}

	public function getRoutes() {
		return $this->routes;
	}

	public function setRoutes(array $routes) {
		$this->routes = $routes;
	}

	/*
		Método que faz a instância dinâmica do controlador do index de acordo com o path estabelecido nas rotas, para que os métodos possam ser acionados.
		
		Com isso é necessário saber a url corrente do navegador e usar um foreach que retorna o índice do array 'home' e 'sobre_nos' e o valor. Caso a url digitada seja compatível com a variável route no índice route, ou seja, alguma das rotas definidas dentro da aplicação, será criada uma variável que receberá com base no atributo controller do array route e do namespace de indexController o nome da classe a ser instanciada no caso 'IndexController', onde a mesma será concatenada com o nome o path ($route['controller']) da classe que se quer acessar;

		Após isso é feito o instânciamento dinâmico através da variável definidora, cujo o nome e o namespace da classe foi formado dinâmicamente equivalente a '$controller = new App\Controllers\IndexController;'. Uma vez instanciada o processo é parecido para executar uma ação, que é definida dinamicamente com base no atributo action do array de rotas.
	*/
	protected function run($url) {
		foreach ($this->getRoutes() as $key => $route) {
			if($url == $route['route']) {
				$class = "App\\Controllers\\".ucfirst($route['controller']);

				$controller = new $class;
				
				$action = $route['action'];

				$controller->$action();
			}
		}
	}

	/*
		Retorna a URL corrente do usuário, request_uri é a posição relevante dentro do array de retorno do $_SERVER. parse_url recebe uma url, interpreta e retorna os componentes através de um array, PHP_URL_PATH quando submetido ao parse URL faz com que o retorno seja apenas a string relativa ao path. 
	*/
	protected function getUrl() {
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}
}

?>