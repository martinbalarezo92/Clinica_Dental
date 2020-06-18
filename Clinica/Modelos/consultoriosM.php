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

	//Ver Consultorios


	static public function VerConsultoriosM($tablaBD, $columna, $valor){

		if($columna == null){

			$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD");

			$pdo -> execute();

			return $pdo -> fetchAll();

		}else{

			$pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE $columna = :$columna");

			$pdo -> bindParam(":".$columna, $valor, PDO::PARAM_STR);

			$pdo -> execute();

			return $pdo -> fetch();

		}

	}


}