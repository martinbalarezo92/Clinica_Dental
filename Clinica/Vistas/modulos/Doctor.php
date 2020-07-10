<?php

if($_SESSION["rol"] != "Paciente"){

	echo'<script>

	window.location = "inicio"
	</script>';


	return;

}

?>

<div class="content-wrapper">
	
	<section class="content-header">
		
		<?php

		$columna = "id";
		$valor = substr($_GET["url"], 7);

		$resultado = DoctoresC::DoctorC($columna, $valor);

		if ($resultado["sexo"] == "Femenino") {
			
			echo'<h1>Doctora: '.$resultado["apellido"].' '.$resultado["nombre"].'</h1>';

		}else{

			echo'<h1>Doctor: '.$resultado["apellido"].' '.$resultado["nombre"].'</h1>';

		}

		$columna = "id";
		$valor = $resultado["id_consultorio"];

		$consultorio = ConsultoriosC::VerConsultoriosC($columna, $valor);

		echo'

		<br>
		<h1>Consultorio de '.$consultorio["nombre"].'</h1>

		';

		?>


		

	</section>

	<section class="content">
		
		<div class="box">
			
			

			<div class="box-body">
				
				

			</div>

		</div>

	</section>

</div>






