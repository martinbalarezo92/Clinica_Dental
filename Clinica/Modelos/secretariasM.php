<?php

require_once "conexionDB.php";

class SecretariasM extends ConexionBD{


	//Ingreso Secretarias
	static public function IngresarSecretariaM($tablaBD, $datosC){

		$pdo = ConexionBD::cBD() -> prepare("SELECT usuario, clave, nombre, apellido, foto, rol, id FROM $tablaBD WHERE usuario = :usuario");

		$pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR); 

		$pdo -> execute();

		return $pdo -> fetch();

		$pdo -> close();
		$pdo = null;

	}



	//Ver perfil
	static public function VerPerfilSecretariaM($tablaBD, $id){

$pdo = ConexionBD::cBD() -> prepare("SELECT usuario, clave, nombre, apellido, foto, rol, id FROM $tablaBD WHERE id = :id");

		$pdo -> bindParam(":id", $id, PDO::PARAM_INT); 

		$pdo -> execute();

		return $pdo -> fetch();

		$pdo -> close();
		$pdo = null;
	}

}