	<?php

	if($_SESSION["rol"] != "Secretaria"){

		echo'<script>

		window.location = "inicio"
		</script>';


		return;

	}



	?>

	
	<!-- <link rel="stylesheet" type="text/css" href="http://localhost/clinica/Vistas/myCSS/myCSS.css">  -->
	<style type="text/css">

		.no-edit{
			background-color: ;
		}

		section {
			height: 100%;
			width: 100%;
			display: inline-block;
			/*background-color: red; */
		}

		div.box-body{
			height: 100%;
			width: 100%;
			display: inline-block;
			/* background-color: cyan;*/
			margin: 0%; 
		}

		div.columna{
			margin-bottom: 15px;
			height: 30px
		}

		.margenSubTitulo{

			margin-top: 3%;
		}	



		.redondo{

			width: 40px;
			height: 40px;
			border: 12px solid gray;
			border-radius: 50%;
		}

		.totalbg{
			background-color: #ffff99;
		}

		.lingual-sup,
		.lingual-inf {
			height: 15px;
			width: 30px;
			background: #9e978e;
			display: inline-block;
			margin: 0 1em 1em 0;
			border: solid 1px black;
			cursor: pointer;



		}

		.lingual-der,
		.lingual-izq {
			height: 30px;
			width: 15px;
			
			display: inline-block;
			margin: 0 1em 1em 0;
			border: solid 1px black;
			cursor: pointer;

		}

		.lingual-sup {
			border-top-left-radius: 30px;
			border-top-right-radius: 30px;
			
			display: inline-block;
			margin: 0 1em 1em 0;
			position: absolute; left: 28px; top: 15px;
		}

		.lingual-der {
			border-bottom-right-radius: 30px;
			border-top-right-radius: 30px;
			
			display: inline-block;
			margin: 0 1em 1em 0;
			position: absolute; left: 58px; top: 30px;
		}

		.lingual-inf {
			border-bottom-left-radius: 30px;
			border-bottom-right-radius: 30px;
			
			display: inline-block;
			margin: 0 1em 1em 0;
			position: absolute; left: 28px; top: 60px;
		}

		.lingual-izq {
			border-bottom-left-radius: 30px;
			border-top-left-radius: 30px;
			
			display: inline-block;
			margin: 0 1em 1em 0;
			position: absolute; left: 13px; top: 30px;
		}

		.lingual-cen{
			
			height: 28px;
			width: 28px;
			border-radius: 5px;
			border: solid 1px black;
			position: absolute; left: 29px; top: 31px; 
			cursor: pointer;

		}

		.vestibular-sup,
		.vestibular-inf {
			height: 15px;
			width: 30px;
			
			display: inline-block;
			margin: 0 1em 1em 0;
			cursor: pointer;
			border: solid 1px black;


		}

		.vestibular-der,
		.vestibular-izq {
			height: 30px;
			width: 15px;
			
			display: inline-block;
			margin: 0 1em 1em 0;
			border: solid 1px black;
			cursor: pointer;
		}

		.vestibular-sup {
			border-top-left-radius: 3px;
			border-top-right-radius: 3px;
			
			display: inline-block;
			margin: 0 1em 1em 0;
			position: absolute; left: 30px; top: 5px;

		}

		.vestibular-der {
			border-bottom-right-radius: 3px;
			border-top-right-radius: 3px;
			
			display: inline-block;
			margin: 0 1em 1em 0;
			position: absolute; left: 60px; top: 20px;
		}

		.vestibular-inf {
			border-bottom-left-radius: 3px;
			border-bottom-right-radius: 3px;
			
			display: inline-block;
			margin: 0 1em 1em 0;
			position: absolute; left: 30px; top: 50px;
		}

		.vestibular-izq {
			border-bottom-left-radius: 3px;
			border-top-left-radius: 3px;
			
			display: inline-block;
			margin: 0 1em 1em 0;
			position: absolute; left: 15px; top: 20px;
		}

		

		.vestibular-cen{
			
			height: 28px;
			width: 28px;
			border-radius: 5px;
			border: solid 1px black;
			position: absolute; left: 31px; top: 21px;
			cursor: pointer;
		}


		.cent-texto{
			display: flex; 
			justify-content: center;
			align-items: center;

		}

		.centrado{
			text-align: center;
		}

		.margenes{
			border: solid black 1px;
		}

		.borde-sup{
			border-top: solid black 1px;
		}

		.borde-der{
			border-right: solid black 1px;
		}

		.borde-inf{
			border-bottom: solid black 1px;
		}

		.borde-izq{
			border-left: solid black 1px;
		}

	</style>

	<link rel="stylesheet" type="text/css" href="http://localhost/clinica/Vistas/myCSS/myCSS.css">

	<div class="content-wrapper">

		<section class="content-header">

			<h1>Historía Clinica</h1>

		</section>

		<section class="content " >  

			

			<div class="box">

				<div class="box-body">

					<form method="post" enctype="multipart/form-data">
						

						<?php 							

						$editarHC = new HistoriaClinicaC();

						$editarHC -> EditarHistoriaClinicaC();

						$editarHC -> ActualizarHistoriaClinicaC();					
						

						?>

					</form>
					
				</div>


			</div>


		</section>

	</div>






<!-- <?php
//include "php/php.php";
?> -->




