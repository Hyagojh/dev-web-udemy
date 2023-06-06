<?php

namespace App;

class Connection {

	public static function getDb() {
		/*Faz a conexão com o banco de dados com PDO*/
		try {

			$conn = new \PDO(
				"mysql:host=localhost;dbname=mvc;charset=utf8",
				"root",
				"" 
			);

			return $conn;

		} catch (\PDOException $e) {
			//.. tratar de alguma forma ..//
		}
	}
}

?>