    <section id="footer"  style="color: white" class="seccion">


        <section id="sub_footer" style="background-color: #006ca3ad ; padding: 20px 0px;">
           <div class="container">
            <div class="row " >

                  <div class="col-md-4 col-xs-12 ">

                        <p>Billinghurst 1833 - Piso 10, Buenos Aires - Argentina</p>
                        <p>+5411 4821-2105</p>
                        <p>informes@fundacionsidom.org</p>

                  </div>
                  <div class="col-md-4 col-xs-12 " >
                        <ul class="item-footer" style="color:#000"> 

                            <li><i class="fab fa-pushed"></i> <a  href="./investigacion_desarrollo.php">Investigación y Desarrollo</a></li>
                            <li><i class="fab fa-pushed"></i> <a  href="./red.php">Red</a></li>
                            <li><i class="fab fa-pushed"></i> <a  href="./contacto.php">Contacto</a></li>
                        </ul>
                  </div>
                   <div class="col-md-4 col-xs-12 " >
                        <ul class="item-footer" style="color:#000">
                            <li><i class="fab fa-pushed"></i> <a  href="./home.php"> Home </a></li>
                            <li><i class="fab fa-pushed"></i> <a  href="./cuidado_domiciliario.php"> Cuidado Domiciliario </a></li>
                            <li><i class="fab fa-pushed"></i> <a  href="./servicios.php"> Servicios </a></li> 
                        </ul>
                  </div>



            </div>
          </div>
        </section>



        <section id="sub_footer" style="background-color: #00699e; padding-top: 20px; padding-bottom: 20px; text-align: center ">
          <div class="container">
            <div class="row" >

                  <div class="col-md-12 col-xs-12 " >


                    ©2018 SIDOM

                    </div>


            </div>
          </div>
        </section>

    </section>

  	</body>



  <!-- Bootstrap core jquery -->

  <script type="text/javascript" src="./assets/js/jquery.min.js"  ></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

  

  <!-- Bootstrap  -->
  <script type="text/javascript" src="./assets/dist/js/bootstrap.min.js"  ></script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="./assets/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script type="text/javascript" src="./assets/js/jquery-easing/jquery.easing.min.js"></script>




  <!-- Jquery validate  -->
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js" ></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.min.js" ></script>

  <script>
    var jq_va = jQuery.noConflict();
  </script>

  <script type="text/javascript">
     jq_va(document).ready(function(){
      jq_va('.customer-logos').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
          breakpoint: 768,
          settings: {
            slidesToShow: 4
          }
        }, {
          breakpoint: 520,
          settings: {
            slidesToShow: 3
          }
        }]
      });
});
  </script>


   <!-- Scroll vertical -->
  <script type="text/javascript" src="./assets/js/scrolling-nav.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

  <script>
    var jq_sc = jQuery.noConflict();
  </script>




</html>