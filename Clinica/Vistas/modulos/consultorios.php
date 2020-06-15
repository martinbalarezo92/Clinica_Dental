<?php

if($_SESSION["rol"] != "secretaria"){

	echo'<script>

	window.location = "inicio"
	</script>';


	return;

}

?>

<div class="content-wrapper">
	
	<section class="content-header">
		
		<h1>Gestor de Consultorios</h1>

	</section>

	<section class="content">
		
		<div class="box">
			
			<div class="box-header">
				
				<form>
					
					<div class="col-md-6 col-xs-12">
						<input type="text" class="input-lg" name="consultorioN" placeholder="Ingrese Nuevo Consultorio" required>
					</div>

					<button type="submit" class="btn btn-primary">Crear Consultorio</button>

				</form>

			</div>


			<div class="box-body">
				
				<table class="table table-bordered table-hover table-striped">
					
					<thead>
						
						<tr>
							
							<th>N°</th>
							<th>Nombre</th>
							<th>Editar / Borrar</th>

						</tr>

					</thead>

					<tbody>
						
						<tr>
							
							<td>1</td>

							<td>cardiologia</td>

							<td>
								
								<div class="btn-group">
									
									<a href="">
										
										<button class="btn btn-success"><i class="fa fa-pencil"></i> Editar</button>

									</a>

									<a href="">
										
										<button class="btn btn-danger"><i class="fa fa-times"></i> Borrar</button>

									</a>

								</div>

							</td>

						</tr>

					</tbody>

				</table>

			</div>

		</div>

	</section>

</div>