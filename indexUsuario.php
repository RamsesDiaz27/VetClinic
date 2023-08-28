<!DOCTYPE html>
<html lang="es">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Vet Clinic</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <style>
        /* Estilo personalizado para el nombre de usuario */
        .nav-username {
            font-weight: bold;
            color: #FF5733; /* Cambia el color según tus preferencias */
        }
    </style>
</head>

<body>
 <?php  
 session_start();
 ?>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <!-- ... -->
    
    <!-- ... -->
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="indexUsuario.php">
            <img src="images/logo1.png" alt="">
            <span>
              Vet Clinic
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="indexUsuario.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php">servicios </a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="clinic.php"> Sobre nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> </a>
                </li>
                <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #1E88E5;">
                Bienvenido <?php echo $_SESSION["username"]; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="miscitas.php">Mis citas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-danger" href="logout.php">Cerrar Sesión</a>
            </div>
        </li>
               
            
              </ul>
              
            </div>
           
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                       Vet Clinic
                      <span>
                        La mejor veterinaria
                      </span>
                    </h1>
                    <p>
                      Somos una clínica veterinaria que brinda atención médica de calidad para mascotas de todas las edades. 
                      Ofrecemos una amplia gama de servicios, 
                      que incluyen vacunas, chequeos rutinarios, cirugía y más.
                    </p>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      Sobre 
                      <span>
                        Nosotros
                      </span>
                    </h1>
                    <p>
                      Hemos estado brindando atención médica veterinaria de calidad a las 
                      mascotas de nuestra comunidad durante más de 20 años. Estamos orgullosos 
                      de ofrecer una amplia gama de servicios a precios asequibles.
                    </p>
                    
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

 <br>

  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6 offset-md-2">
          <h2 class="custom_heading">
              Nuestros <span>Servicios</span>
          </h2>
          <div class="container layout_padding2">
            <div class="row">
              <div class="col-md-4">
                <div class="img_box">
                  <img src="images/s-1.png" alt="">
                </div>
                <div class="detail_box">
                  <h6>
                    Vacunación y Prevención de Enfermedades
                  </h6>
                  <p>
                    Ofrecemos programas de vacunación personalizados para asegurarnos de que tus animales reciban las 
                    inmunizaciones necesarias para mantenerse saludables.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="img_box">
                  <img src="images/s-2.png" alt="">
                </div>
                <div class="detail_box">
                  <h6>
                    Consulta Médica Veterinaria

                  </h6>
                  <p>
                    Nuestros veterinarios realizan evaluaciones exhaustivas de la salud de tu mascota, desde un examen físico
                     completo hasta el análisis de cualquier problema de salud
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="img_box">
                  <img src="images/s-3.png" alt="">
                </div>
                <div class="detail_box">
                  <h6>
                    Servicios de Emergencia las 24 horas
                  </h6>
                  <p>
                    estamos disponibles las 24 horas del día, los 7 días de la semana, 
                    para brindar atención médica urgente a tus mascotas. 
                  </p>
                </div>
              </div>
            </div>
          </div>
        
        </div>
        <div class="col-md-4">
          <img src="images/tool.png" alt="" class="w-100">
        </div>
      </div>
    </div>
  </section>

  <!-- end service section -->




  <!-- map section -->


  <!-- end map section 
  
<div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.434257763261!2d-93.15217022572197!3d16.755056920714992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ed271dde11f2c7%3A0x95db9d540d8cade2!2sPlaza%20Crystal%20Tuxtla!5e0!3m2!1ses!2smx!4v1692645248144!5m2!1ses!2smx" width="1345" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>-->
  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="info_items">
        <a href="">
          <div class="item ">
            <div class="img-box box-1">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                Location
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-2">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                +02 1234567890
              </p>
            </div>
          </div>
        </a>
        <a href="">
          <div class="item ">
            <div class="img-box box-3">
              <img src="" alt="">
            </div>
            <div class="detail-box">
              <p>
                  VetClinic@gmail.com
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- end info_section -->



  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
   
  </script>
  <!-- google map js -->

  <!-- end google map js -->
</body>
</body>

</html>