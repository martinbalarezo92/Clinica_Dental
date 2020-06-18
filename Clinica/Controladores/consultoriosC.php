<?php

class ConsultorioC{

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



}

?>