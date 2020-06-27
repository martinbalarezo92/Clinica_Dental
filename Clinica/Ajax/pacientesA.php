<?php

require_once "../Controladores/pacientesC.php";
require_once "../Modelos/pacientesM.php";

class PacientesA{

	public $Pid;

	public function EPacienteA(){

		$columna = "id";
		$valor = $this->Pid;

		$resultado = PacientesC::VerPacientesC($columna, $valor);

		echo json_encode($resultado);


	}

}

if(isset($_POST["Pid"])){

	$editarP = new PacientesA();
	$editarP -> Pid = $_POST["Pid"];
	$editarP -> EPacienteA();

}