<?php

class PacientesC{
	
	//Crear Pacientes
	public function CrearPacienteC(){
		
		if(isset($_POST["rolP"])){

			$tablaBD = "pacientes";

			$datosC = array("apellido"=> $_POST["apellido"], "nombre"=> $_POST["nombre"], "documento"=> $_POST["documento"], "usuario"=> $_POST["usuario"], "clave"=> $_POST["clave"], "rol"=> $_POST["rolP"]);

			$resultado = PacientesM::CrearPacienteM($tablaBD, $datosC);

			if($resultado == true){

				echo'<script>

				window.location = "pacientes";

				</script>';

			}

		}

	}

	//Ver Paceitnes

	static public function VerPacientesC($columna, $valor){

		$tablaBD = "pacientes";

		$resultado = PacientesM::VerPacientesM($tablaBD, $columna, $valor);

		return $resultado;

	}

}