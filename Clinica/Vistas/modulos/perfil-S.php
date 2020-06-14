<?php

if($_SESSION["rol"] != "secretaria"){

	echo '<script>

	window.location = "inicio";
	</script>';

	return;

}

?>

<div class="content-wrapper">

	<section class="content">
		
		<div class="box">
			
			<div class="box-body">

				
				
				<form method="post" enctype="multipart/form-data">

					<div class="row">
						
						<div class="col-md-6 col-xs-12">
							
							<h2>Nombre: </h2>
							<input type="text" class="input-lg" name="nombreP" value="">
							<input type="hidden" class="input-lg" name="idP" value="">

							<h2>Apellido: </h2>
							<input type="text" class="input-lg" name="apellidoP" value="">

							<h2>Usuario: </h2>
							<input type="text" class="input-lg" name="usuarioP" value="">

							<h2>Contraseña: </h2>
							<input type="text" class="input-lg" name="claveP" value="">

						</div>

						<div class="col-md-6 col-xs-12">
							
							<br><br>

							<input type="file" name="imgP">
							<br>

							<img src="http://localhost/clinica/Vistas/img/defecto.png" class="img-responsive" width="200px;">
							
							<input type="hidden" name="imgActual" value="">

							<br><br>

							<button type="submit" class="btn btn-success">Guardar Cambios</button>

						</div>

					</div>
					
				</form>

			</div>

		</div>

	</section>

</div>