<?php

class BD_Servidor {

	private $pdo;

	public function __CONSTRUCT() {
		try {
			$opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
			$this->pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'root', $opciones);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                
		} catch(Exception $e) {
				die($e->getMessage());
		}
	}
}  

?>