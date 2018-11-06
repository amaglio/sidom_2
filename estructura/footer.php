    <section id="footer"  style="color: white" class="seccion">


        <section id="sub_footer" style="background-color: #006ca3ad ; padding: 20px 0px;">
           <div class="container">
            <div class="row " >

                  <div class="col-md-4 col-xs-12 ">

                        <p>SIDOM S.A. | Sede central</p>
                        <p>Neuquén 1329, Capital Federal </p>
                        <p>+5411 4632-8100 </p>
                        <p>consultas@sidom.com.ar</p>

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

  <script type="text/javascript">
    var loc = window.location.pathname;

    console.log( loc );


    $('#navbar').find('a').each(function() {
      
      var url_a = '/sidom_2/'+$(this).attr('href'); 
      
      $(this).toggleClass('active', url_a == loc);

    });

</script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

  <!-- Bootstrap  -->
  <script type="text/javascript" src="./assets/dist/js/bootstrap.min.js"  ></script>

  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="./assets/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script type="text/javascript" src="./assets/js/jquery-easing/jquery.easing.min.js"></script>


<!--   <script src="./assets/js/contact_me.js"></script> -->

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
     
      jq_va(function(){

            jq_va('#form_contacto').validate({

                rules :{

                        nombre : {
                            required : true
                        },
                        apellido : {
                            required : true
                        },
                        email : {
                            required : true,
                            email : true
                        }  
                },
                messages : {

                        nombre : {
                            required : "Debe ingresar su nombre"
                        },
                        apellido : {
                            required : "Debe ingresar su apellido"
                        },
                        email : {
                            required : "Debe ingresar el email",
                            email: "Debe tener el formato de email"
                        }  
                } 
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