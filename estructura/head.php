<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- OsteriaX -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIDOM</title>

    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">

     <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" >

    <link href="./assets/dist/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" >

    <link href="./assets/css/infinite-slider.css" rel="stylesheet" type="text/css" >

    <link href="./assets/css/hover.css" rel="stylesheet" type="text/css" >
 

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.11/css/all.css" integrity="sha384-p2jx59pefphTFIpeqCcISO9MdVfIm4pNnsL08A6v5vaQc4owkQqxMV8kg4Yvhaw/" crossorigin="anonymous">

    <link href="./assets/css/style.css" rel="stylesheet" type="text/css" >

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
 

    </head>
  <body>
  <section id="header">
      <div class="row">


            <nav class="navbar  navbar-fixed-top" role="navigation">
                <div class="container">
                  <div class="navbar-header">
                    <div class="container">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#"><img class="img_logo"  src="./assets/img/logo.png"></a>
                    </div>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">

                    <div class="navbar-form navbar-right" role="form">
                      <div class="form-group">
                        <a class="nav-link js-scroll-trigger active" href="./home.php"> Home </a>
                      </div>
                      <div class="form-group">
                        <a class="nav-link js-scroll-trigger" href="./cuidado_domiciliario.php"> Cuidado Domiciliario </a>
                      </div>
                      <div class="form-group">
                        <a class="nav-link js-scroll-trigger" href="./servicios.php"> Servicios </a>
                      </div>
                      <div class="form-group nav-item">
                        <a class="nav-link js-scroll-trigger" href="./investigacion_desarrollo.php">Investigación y Desarrollo</a>
                      </div>
                      <div class="form-group nav-item">
                        <a class="nav-link js-scroll-trigger" href="./red.php">Red</a>
                      </div>
                      <div class="form-group nav-item">
                        <a class="nav-link js-scroll-trigger" href="./contacto.php">Contacto</a>
                      </div>
                    </div>


                  </div><!--/.navbar-collapse  -->
                </div>
              </nav>

              <script>

                // Add active class to the current button (highlight it)
                var header = document.getElementById("navbar");

                var btns = header.getElementsByClassName("nav-link js-scroll-trigger");

                for (var i = 0; i < btns.length; i++)
                {
                    btns[i].addEventListener("click", function()
                    {
                      var current = document.getElementsByClassName("active");
                      current[0].className = current[0].className.replace(" active", "");
                      this.className += " active";
                    });
                }

              </script>
            <

      </div>
  </section>