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
		
		<h1>Editar Consultorio</h1>

	</section>

	<section class="content">
		
		<div class="box">
			
			<div class="box-body">
				
				<form method="post">
					
					<?php

					$editarC = new ConsultoriosC();
					$editarC -> EditarConsultorio();

					?>			

				</form>

			</div>

		</div>

	</section>

</div>