<?php
header("Access-Control-Allow-Origin: *"); // allow request from all origin
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Methods: GET,HEAD,OPTIONS,POST,PUT");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization");

header('Content-Type: application/json');  //  return format JSON.


// intance d'un objet  BD_Servidor:
$bd = new BD_Servidor();


//  on prendre les donnes(format JSON), envoyé pour le cliente:
$datos = file_get_contents('php://input');  //  $datos es un string, y no un objeto php
//  conversion a un objet php:
$objeto=json_decode($datos);

switch ($objeto->servicio) {
	

	case "listUsers":
			print json_encode($bd->listadoPersonas());
			break;				

	default:
			print '{"servicio": "NO"}';
}



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

	
	public function listUsers() {
		try {
			$sc = "SELECT * FROM `users` ";
			$stm = $this->pdo->prepare($sc);
			$stm->execute();
			return ($stm->fetchAll(PDO::FETCH_ASSOC));
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
	
}  //  class BD_login

?>