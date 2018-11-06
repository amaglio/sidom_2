<?php include('estructura/head.php') ?> 
<?php include('funciones.php') ?> 

	<style type="text/css">
		
		.img-thumbnail{

			height: 100px;
			width: 100%;


		}

		.imagen{
			height: 150px;
			overflow: hidden;
		    background-size: cover;
		    background-position: center;
		    background-image: url('./assets/img/imagen.jpg');


		}
	</style>

	<section id="seccion_slide">
		<div class="row">
			<div class="col-md-12 col-xs-12 " >
				<div class="container">
					<p class="text-center">TEXTO DE BAJADA GENERAL 2S</p>
				</div>
			</div>
		</div>
	</section>

	<div class="row">
			<div class="container" >
				<div class="col-md-8 col-xs-12 " > 
						<div class="row">
							<div class="col-md-4">MAPA 1</div>
							<div class="col-md-8">SEDE 1</div>
						</div>

						<div class="row">
							<div class="col-md-4">MAPA 2</div>
							<div class="col-md-8">SEDE 2</div>
						</div>

						<div class="row">
							<div class="col-md-4">MAPA 3</div>
							<div class="col-md-8">SEDE 3</div>
						</div>

						<div class="row">
							<div class="col-md-4">MAPA 4</div>
							<div class="col-md-8">SEDE 4</div>
						</div>

						<div class="row">
							<div class="col-md-4">MAPA 5</div>
							<div class="col-md-8">SEDE 5</div>
						</div>
					 
				</div>
			
 
 
				<div class="col-md-4 col-xs-12 " >
					 <?php ver_formulario(); ?>

				</div>
			 </div>
	</div>

<?php include('estructura/footer.php') ?>

