<?php

namespace MF\Controller;

abstract class Action {

	protected $view;

	public function __consctruct() {
		/*
			cria um objeto vazio que pode ser dinamicamente compostos de atributos durante a lógica do processamento da aplicaçãdo 
		*/
		$this->view = new \stdClass();
	}

	/*
		Basicamente seta um layout padrão e muda o conteúdo dele, ambos usando lógicas para manipular o path
	*/
	protected function render($view, $layout) {
		$this->view->page = $view;

		if(file_exists("../App/Views/".$layout.".phtml")) {
			require_once "../App/Views/".$layout.".phtml";
		} else {
			$this->content();
		}
	}

	protected function content() {
		$classAtual = get_class($this);

		$classAtual = str_replace('App\\Controllers\\', '', $classAtual);

		$classAtual = strtolower(str_replace('Controller', '', $classAtual));

		require_once "../App/Views/".$classAtual."/".$this->view->page.".phtml";
	}
}

?>