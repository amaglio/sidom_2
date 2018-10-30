<?php include('estructura/head.php') ?>
	
	<style type="text/css">
			.slick-slide img{
  width: auto;
}

	</style>

	<section id="seccion_slide">
		<div class="row">

		<div class="col-md-12 col-xs-12 " >

		    <div id="myCarousel" class="carousel slide" data-ride="carousel">
		        <!-- Indicators -->
		        <ol class="carousel-indicators">
		          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		          <li data-target="#myCarousel" data-slide-to="1"></li>
		          <li data-target="#myCarousel" data-slide-to="2"></li>
		        </ol>

		        <!-- Wrapper for slides -->
		        <div class="carousel-inner" id="carousel-inner" >

		          <div class="item active">
		             <img class="d-block w-100 imagen_slider" src="./assets/img/carrusel/4fca9-slider1.jpg"  >
		             <div class="shadow"></div>


		                <div class="slide_div_titulo">
		                  <div class="container container_slider" >
		                  <p class="slide_titulo1">TITULO1</p>
		                  <p class="slide_titulo2">SUBTITULO 2</p>
		                  <p class="slide_descripcion">DESCRIPCION </p>
		                </div>
		              </div>
		          </div>

		          <div class="item ">
		             <img class="d-block w-100 imagen_slider" src="./assets/img/carrusel/156e1-slider3.jpg"  >
		             <div class="shadow"></div>


		                <div class="slide_div_titulo">
		                  <div class="container container_slider" >
		                  <p class="slide_titulo1">TITULO1</p>
		                  <p class="slide_titulo2">SUBTITULO 2</p>
		                  <p class="slide_descripcion">DESCRIPCION </p>
		                </div>
		              </div>
		          </div>



		        </div>
		         <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		         <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>

		    </div>
		  </div>
		</div>
	</section>

	<section id="seccion_texto_fijo">

		<div class="row">
			<div class="col-md-12 col-xs-12 " >
				<div class="container">
					TEXTO FIJO FILOSOFIA DEL TRABAJO
				</div>

			</div>
		</div>

	</section>

	<section id="seccion_cuadricula">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					SERVICIOS
				</div>
				<div class="col-md-6">
					PLAN TERAPEUTICO
				</div>
				<div class="col-md-6">
					INVESTIGACION Y DESARROLLO
				</div>
				<div class="col-md-6">
					VIDEO
				</div>
			</div>
		</div>
	</section>

	 <section id="logos">  

      <div class="container">
        <div class="row div_row">
            <div class="row ">
                <div class=" col-xs-12  "  > 
                  <label class="label_seccion" style="  border-left:4px solid #d8a9b5;">
            
                      Convenios
            
                  </label>
                </div>
              </div>

            <section class="customer-logos slider">
              <div class="slide"><img class="img_convenio" src="./assets/img/convenios/CONVENIOBIOETICAR.png"></div>
              <div class="slide"><img class="img_convenio" src="./assets/img/convenios/CONVENIOSBUENOSAIRES.png"></div>
              <div class="slide"><img class="img_convenio" src="./assets/img/convenios/CONVENIOSGC.jpg"></div>
              <div class="slide"><img class="img_convenio" src="./assets/img/convenios/CONVENIOSIDOM.jpg"></div>
              <div class="slide"><img class="img_convenio" src="./assets/img/convenios/CONVENIOSSANFRANCISCO.jpg"></div>
              <div class="slide"><img class="img_convenio" src="./assets/img/convenios/CONVENIOSSIGLO21.jpg"></div>
              <div class="slide"><img class="img_convenio" src="./assets/img/convenios/CONVENIOSVICENTELOPEZ.jpg"></div> 
            </section>
        </div>
      </div>
    </section>


<?php include('estructura/footer.php') ?>