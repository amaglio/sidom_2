<?php include('estructura/head.php') ?> 
	
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
					<p class="text-center">FORMULARIO</p>

					<div class="form-group" style="padding-top: 10px">
		                <label>Dejanos tu consulta</label>
		            </div>
		            <form name="form_contacto" id="form_contacto" method="post" action=" /contacto/procesar_contacto">
		                    
		                <div class="form-group">
		                    <input type="text" class="form-control" name="nombre" id="nombre"  placeholder="Nombre *">  
		                </div>
		                
		                <div class="form-group">
		                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido *">
		                </div>

		                <div class="form-group">
		                    <input type="text" class="form-control" name="email" id="email" placeholder="Email *">
		                </div>
		                
		                <div class="form-group">
		                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
		                </div>
		                
		               

		                <div class="form-group">
		                   <textarea class="form-control" id="consulta" name="consulta" placeholder="Comentario *"></textarea>
		                </div>

		               <input type="submit" class="btn btn-primary btn-block" name="enviar" id="enviar" value="Enviar">

		            </form>

				</div>
			 </div>
	</div>

<?php include('estructura/footer.php') ?>

