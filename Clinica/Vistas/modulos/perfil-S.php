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

				<?php

				$editarPerfil = new secretariasC();
				$editarPerfil -> EditarPerfilSecretaria();

				?>
				
				

			</div>

		</div>

	</section>

</div>