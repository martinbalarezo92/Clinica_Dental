<?php

if($_SESSION["rol"] != "Secretaria" && $_SESSION["rol"] != "Doctor" && $_SESSION["rol"] != "Administrador"){

	echo'<script>

	window.location = "inicio"
	</script>';


	return;

}

?>

<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Gestor de Pacientes</h1>

	</section>

	<section class="content">
		
		<div class="box">
			
			<div class="box-header">
				
				<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#CrearPaciente">
					<i class="fa fa-plus" aria-hidden="true"></i>

					 Crear Paciente
				
				</button>	

			</div>


			<div class="box-body" >
				
				<table class="table table-bordered table-hover table-striped DT">
					
					<thead>
						
						<tr>
							
							<th>N°</th>
							<th>Apellido</th>
							<th>Nombre</th>
							<th>Documento</th>
							<th>Foto</th>

							<th>Telefono 1</th>
							<th>Telefono 2</th>
							<th>Dirección</th>
							<th>E-mail</th>
							
							<th>Editar / Borrar</th>
																					

						</tr>

					</thead>

					<tbody>


						<?php

						$columna = null;
						$valor = null;

						$resultado = PacientesC::VerPacientesC($columna, $valor);

						foreach ($resultado as $key => $value) {

							echo'

							<tr>
							
							<td>'.($key+1).'</td>

							<td>'.$value["apellido"].'</td>
							<td>'.$value["nombre"].'</td>
							<td>'.$value["documento"].'</td>';

							if($value["foto"] == ""){

								echo'	<td> <img src="Vistas/img/defecto.png" width="40px"> </td>';

							}else{

								echo'	<td> <img src="'.$value["foto"].'" width="40px"> </td>';

							}

							


							echo'
							
			
								<td>'.$value["telefono_01"].'</td>

								<td>'.$value["telefono_02"].'</td>

								<td>'.$value["e_mail"].'</td>

								<td>'.$value["direccion"].'</td>

								<td>
									
									<div class="btn-group">
										
																		
											<button class="btn btn-success EditarPaciente" Pid="'.$value["id"].'" imgP="'.$value["foto"].'" data-toggle="modal" data-target="#EditarPaciente"><i class="fa fa-pencil"></i>Editar</button>

										
										
											
											<button class="btn btn-danger EliminarPaciente" Pid="'.$value["id"].'" imgP="'.$value["foto"].'"><i class="fa fa-times"></i> Borrar</button>

									

									</div>

								</td>

							</tr>

							';
							
						}

						?>
						

							

												

					</tbody>

				</table>

			</div>

		</div>

	</section>

</div>

<!-- MODAL PARA CREAR Paciente -->
<div class="modal fade" rol="dialog" id="CrearPaciente">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form method="post" role=form>
				
				<div class="modal-body">
					
					<div class="box-body">
						
						<div class="form-group">
							
							<h2>Apellido: </h2>

							<input type="text" class="form-control input-lg"  name="apellido" required>

							<input type="hidden" name="rolP" value="Paciente" required>

						</div>

						<div class="form-group">
							
							<h2>Nombre: </h2>

							<input type="text" class="form-control input-lg"  name="nombre" required>

						</div>

						<div class="form-group">
							
							<h2>Documento: </h2>

							<input type="text" class="form-control input-lg"  name="documento" required>

						</div>						

						<div class="form-group">
							
							<h2>Usuario: </h2>

							<input type="text" class="form-control input-lg" id="usuario" name="usuario" required>

						</div>

						<div class="form-group">
							
							<h2>Contraseña: </h2>

							<input type="text" class="form-control input-lg"  name="clave" required>

						</div>

					</div>

				</div>

				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary">Crear</button>

					<button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

				</div>

				<?php

				$crear = new PacientesC();
				$crear -> CrearPacienteC();

				?>

			</form>

		</div>

	</div>

</div>


<!-- MODAL PARA EDITAR PACIENTE -->
<div class="modal fade" rol="dialog" id="EditarPaciente">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form method="post" role="form">
				
				<div class="modal-body">
					
					<div class="box-body">
						
						<div class="form-group">
							
							<h2>Apellido:</h2>

							<input type="text" class="form-control input-lg" id="apellidoE" name="apellidoE" required>

							<input type="hidden" id="Pid" name="Pid">

						</div>

						<div class="form-group">
							
							<h2>Nombre:</h2>

							<input type="text" class="form-control input-lg" id="nombreE" name="nombreE" required>

						</div>

						<div class="form-group">
							
							<h2>Documento:</h2>

							<input type="text" class="form-control input-lg" id="documentoE" name="documentoE" required>

						</div>

						<div class="form-group">
							
							<h2>Usuario:</h2>

							<input type="text" class="form-control input-lg" id="usuarioE" name="usuarioE" required>

						</div>

						<div class="form-group">
							
							<h2>Contraseña:</h2>

							<input type="text" class="form-control input-lg" id="claveE" name="claveE" required>

						</div>

					</div>

				</div>


				<div class="modal-footer">
					
					<button type="submit" class="btn btn-success">Guardar Cambios</button>

					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

				</div>

				<?php

				$actualizar = new PacientesC();
				$actualizar -> ActualizarPacienteC();

				?>

			</form>

		</div>

	</div>

</div>


<?php

	$borrarP = new PacientesC();
	$borrarP -> BorrarPacienteC();




