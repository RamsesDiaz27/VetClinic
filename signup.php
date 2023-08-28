<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Regístrate</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/form.css" />
</head>

<body>
  <!--Main Navigation-->
  <header>
    <style>
      #intro {
        background-image: url(https://plus.unsplash.com/premium_photo-1663047331652-c35ec7ff757b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHZldGVyaW5hcmlhbnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60);
        height: 100vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand nav-link" href="">
          <strong>Vet Clinic</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>

          <ul class="navbar-nav d-flex flex-row">

            <li class="nav-item">
              <a class="nav-link" href="login.php">Inicia sesión</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signup.php">Regístrate</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form class="bg-white rounded shadow-5-strong p-5" method="post" action="registrar.php">
                <!-- Nombres -->
                <div class="form-outline mb-4">
                  <input type="text" id="form1Example1" class="form-control" name="txtNombre" required/>
                  <label class="form-label" for="form1Example1">Nombre(s)</label>
                </div>
                <div class="row mb-4">
									<!-- Apellido paterno -->
									<div class="form-outline col-md-6 form-group">
										<input type="text" id="form1Example1" class="form-control" name="txtPaterno" required/>
										<label class="form-label" for="form1Example1">Apellido paterno</label>
									</div>
									<!-- Apellido materno -->
									<div class="form-outline col-md-6 form-group">
										<input type="text" id="form1Example1" class="form-control" name="txtMaterno" required/>
										<label class="form-label" for="form1Example1">Apellido materno</label>
									</div>
								</div>
                <div class="row mb-4">
									<!-- Email input -->
									<div class="form-outline col-md-6 form-group">
										<input type="email" id="form1Example1" class="form-control" name="txtEmail" required/>
										<label class="form-label" for="form1Example1">Correo electrónico</label>
									</div>
									<!-- Password input -->
									<div class="form-outline col-md-6 form-group">
										<input type="password" id="form1Example2" class="form-control" name="txtPassword" required/>
										<label class="form-label" for="form1Example2">Contraseña</label>
									</div>
								</div>
                <div class="row mb-4">
									<!-- Cuenta bancaria -->
									<div class="form-outline col-md-6 form-group">
										<input type="text" id="form1Example2" class="form-control" name="txtCuentaBancaria" required/>
										<label class="form-label" for="form1Example2">Número de cuenta bancaria</label>
									</div>
									<!-- Direccion -->
									<div class="form-outline col-md-6 form-group">
										<input type="address" id="form1Example2" class="form-control" name="txtDireccion" required/>
										<label class="form-label" for="form1Example2">Direccion</label>
									</div>
								</div>
                <div class="row mb-4">
									<!-- CP -->
									<div class="form-outline col-md-6 form-group">
										<input type="text" id="form1Example2" class="form-control" name="txtCodigoPostal" required/>
										<label class="form-label" for="form1Example2">Código postal</label>
									</div>
									<!-- No. teléfono -->
									<div class="form-outline col-md-6 form-group">
										<input type="tel" id="form1Example2" class="form-control" name="txtTelefono" required/>
										<label class="form-label" for="form1Example2">Teléfono</label>
									</div>
								</div>
                <!-- RFC -->
                <div class="form-outline mb-4">
                  <input type="text" id="form1Example2" class="form-control" name="txtRFC" required/>
                  <label class="form-label" for="form1Example2">RFC</label>
                </div>

                
                <div class="row mb-4">
                  <div class="col text-center">
                    <!-- Simple link -->
                    ¿Ya tienes cuenta?<a href="indexLogin.php"> Inicia sesión</a>
                  </div>
                </div>

                <!-- Submit button -->
                <input type="submit" class="btn btn-primary btn-block" value="Regístrate"></input>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Background image -->
  </header>
  <!--Main Navigation-->

  <!--Footer-->
  <footer class="bg-light text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-dark" href="">Vet Clinic</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->
  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="js/script.js"></script>
</body>
</html>