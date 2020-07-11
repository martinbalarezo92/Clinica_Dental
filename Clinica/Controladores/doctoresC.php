<?php

class DoctoresC{

//Crear Doctores
	//Crear Doctores
	public function CrearDoctorC(){

		if(isset($_POST["rolD"])){

			$tablaBD = "doctores";

			$datosC = array("rol"=>$_POST["rolD"], "apellido"=>$_POST["apellido"], "nombre"=>$_POST["nombre"], "sexo"=>$_POST["sexo"],  "id_consultorio"=>$_POST["consultorio"], "usuario"=>$_POST["usuario"], "clave"=>$_POST["clave"]);

			$resultado = DoctoresM::CrearDoctorM($tablaBD, $datosC);

			if($resultado == true){

				echo '<script>

				window.location = "doctores";
				</script>';

			}

		}

	}

//Mostrat Doctores
static public function VerDoctoresC($columna, $valor){

	$tablaBD = "doctores";

	$resultado = DoctoresM::VerDoctoresM($tablaBD, $columna, $valor);

	return $resultado;

}

	//Editar Doctor
static public function DoctorC($columna, $valor){

	$tablaBD = "doctores";

	$resultado = DoctoresM::DoctorM($tablaBD, $columna, $valor);

	return $resultado;

}

	//Actualizar Doctor
	public function ActualizarDoctorC(){

		if(isset($_POST["Did"])){

			$tablaBD = "doctores";

			$datosC = array("id"=>$_POST["Did"], "apellido"=>$_POST["apellidoE"], "nombre"=>$_POST["nombreE"], "sexo"=>$_POST["sexoE"], "usuario"=>$_POST["usuarioE"], "clave"=>$_POST["claveE"]);

			$resultado = DoctoresM::ActualizarDoctorM($tablaBD, $datosC);

			if($resultado == true){

				echo '<script>

				window.location = "doctores";
				</script>';

			}

		}

	}





	//Borrar Doctor
	public function BorrarDoctorC(){

		if(isset($_GET["Did"])){

			$tablaBD = "doctores";

			$id = $_GET["Did"];

			if($_GET["imgD"] != ""){

				unlink($_GET["imgD"]);

			}

			$resultado = DoctoresM::BorrarDoctorM($tablaBD, $id);

			if($resultado == true){

				echo '<script>

				window.location = "doctores";
				</script>';

			}

		}

	}


	// Ingreso al sistema Doctor
public function IngresarDoctorC(){

	if(isset($_POST["usuario-Ing"])){

			if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuario-Ing"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["clave-Ing"])){

				$tablaBD = "doctores";

				$datosC = array("usuario"=> $_POST["usuario-Ing"], "clave"=> $_POST["clave-Ing"]);

				$resultado = DoctoresM::IngresarDoctorM($tablaBD, $datosC);

				if($resultado["usuario"] == $_POST["usuario-Ing"] && $resultado["clave"] == $_POST["clave-Ing"]){

				$_SESSION["Ingresar"] = true;

				$_SESSION["id"] = $resultado["id"];
				$_SESSION["usuario"] = $resultado["usuario"];
				$_SESSION["clave"] = $resultado["clave"];
				$_SESSION["apellido"] = $resultado["apellido"];
				$_SESSION["nombre"] = $resultado["nombre"];
				$_SESSION["sexo"] = $resultado["sexo"];
				$_SESSION["foto"] = $resultado["foto"];
				$_SESSION["rol"] = $resultado["rol"];

				echo '<script>

				window.location = "inicio";
				</script>';

			}

			}

		}

}

// Ver perfil doctor
	public function VerPerfilDoctorC(){

		$tablaBD = "doctores";

		$id = $_SESSION["id"];

		$resultado = DoctoresM::VerPerfilDoctorM($tablaBD, $id);

		echo'

		<tr>
				
				<td>'.$resultado["usuario"].'</td>
				<td>'.$resultado["clave"].'</td>
				<td>'.$resultado["nombre"].'</td>
				<td>'.$resultado["apellido"].'</td>';

				if ($resultado["foto"] == "") {
					# code...
					echo '<td><img src=Vistas/img/defecto.png width="40px"></td>';

				}else{

					echo '<td><img src='.$resultado["foto"].' width="40px"></td>';

				}

		 		$columna = "id";

		 		$valor = $resultado["id_consultorio"];

		 		$consultorio = ConsultoriosC::VerConsultoriosC($columna, $valor);


				echo'<td>'.$consultorio["nombre"].'</td>';

				echo'
				<td>

					Desde: '.$resultado["horarioE"].'
					<br>
					Hasta: '.$resultado["horarioS"].'

				</td>

				<td>
					
					<a href="http://localhost/clinica/perfil-D/'.$resultado["id"].'">
						
						<button class="btn btn-success"><i class="fa fa-pencil"></i></button>

					</a>

				</td>

			</tr>

		';

	}

	//Editar 

	public function EditarPerfilDoctor(){

		$tablaBD = "doctores";
		$id = $_SESSION["id"];

		$resultado = DoctoresM::VerPerfilDoctorM($tablaBD, $id);

		echo'

		<form method="post" enctype="multipart/form-data">
					
					<div class="row">
						
						<div class="col-md-6 col-xs-12">
							
							<h2>Nombre: </h2>
							<input type="text" class="input-lg" name="nombrePerfil" value="'.$resultado["nombre"].'">
							<input type="hidden" name="Did" value="'.$resultado["id"].'">

							<h2>Apellido: </h2>
							<input type="text" class="input-lg" name="apellidoPerfil" value="'.$resultado["apellido"].'">

							<h2>Usuario: </h2>
							<input type="text" class="input-lg" name="usuarioPerfil" value="'.$resultado["usuario"].'">

							<h2>Clave: </h2>
							<input type="text" class="input-lg" name="clavePerfil" value="'.$resultado["clave"].'">';


							$columna = "id";

					 		$valor = $resultado["id_consultorio"];

					 		$consultorio = ConsultoriosC::VerConsultoriosC($columna, $valor);

							echo'

							<h2>Consultorio Actual: '.$consultorio["nombre"].'</h2>

							<h3>Cambiar consultorio</h3>
							<select class="input-lg" name= "consultorioPerfil">';
								
							$columna = null;
							$valor = null;

							$consultorio = ConsultoriosC::VerConsultoriosC($columna, $valor);

							foreach ($consultorio as $key => $value) {
								
								echo'

								<option value="'.$value["id"].'">'.$value["nombre"].'</option>

								';

							}	
							echo'
							</select>

							
							<div class="form-group">
								
								<h2>Horario:</h2>
								Desde: <input type="time" class="input-lg" name="hePerfil" value="'.$resultado["horarioE"].'">
								Hasta: <input type="time" class="input-lg" name="hsPerfil" value="'.$resultado["horarioS"].'">

							</div>
							
						</div>

						<div class="col-md-6 col-xs-12">
							
							<br><br>
							<input type="file" name="imgPerfil">
							<br>
							<img src="http://localhost/clinica/Vistas/img/defecto.png" class="img-responsive" width="200px">

							<input type="hidden" name="imgActual" value="">
							<br><br>

							<button type="submit" class="btn btn-success">Guardar Cambios</button>

						</div>

					</div>

				</form>	

		';

	}
}