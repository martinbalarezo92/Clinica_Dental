<?php

class ConsultoriosC{

	//Crear consultorios
	public function CrearConsultorioC(){

		if(isset($_POST["consultorioN"])){

			$tablaBD = "consultorios";

			$consultorio = array("nombre"=>$_POST["consultorioN"]);

			$resultado = ConsultoriosM::CrearConsultorioM($tablaBD, $consultorio);

			if($resultado == true){

				echo '<script>

				window.location = "http://localhost/clinica/consultorios";
				</script>';

			}

		}

	}


	//Ver Consultorios
	static public function VerConsultoriosC($columna, $valor){

		$tablaBD = "consultorios";

		$resultado = ConsultoriosM::VerConsultoriosM($tablaBD, $columna, $valor);

		return $resultado;

	}


	//Borrar Consultorios
	public function BorrarConsultorioC(){

		if(substr($_GET["url"], 13)){

			$tablaBD = "consultorios";

			$id = substr($_GET["url"], 13);

			$resultado = ConsultoriosM::BorrarConsultorioM($tablaBD, $id);

			if($resultado == true){

				echo '<script>

				window.location = "http://localhost/clinica/consultorios";
				</script>';

			}

		}

	}


}

