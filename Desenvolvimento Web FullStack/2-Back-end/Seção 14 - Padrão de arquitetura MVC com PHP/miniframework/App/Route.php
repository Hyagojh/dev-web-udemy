<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	/*
		$routes faz a criação das rotas, para fins de exemplo foram criadas a rota home e a rota para a página sobre_nos. As rotas são responsáveis por duas coisas: definir qual o controlador que entrará em ação e qual será a ação dentro do controlador que será disparada em função do path. A inicialização se dá pelo setRoutes que define as rotas existentes e possíveis naquela instância feita no index.php
	*/
	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['sobre_nos'] = array(
			'route' => '/sobre_nos',
			'controller' => 'indexController',
			'action' => 'sobreNos'
		);

		$this->setRoutes($routes);
	}

}

?>