<?php

require_once "conexionDB.php";

class ConsultoriosM extends conexionBD {

	//Crear COnsultorios
	static public function CrearConsultorioM($tablaBD, $consultorio){

		$pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD(nombre) VALUES (:nombre)");

		$pdo -> bindParam(":nombre", $consultorio["nombre"], PDO::PARAM_STR);

		if($pdo -> execute()){
			return true;
		}else{
			return false;
		}

		$pdo -> close();
		$pdo = null;

	}


}