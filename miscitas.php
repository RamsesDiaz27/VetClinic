
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: indexLogin.php");
    exit();
}

// Conectar a la base de datos
include 'conexion.php';
$hostname_escuela2 = "localhost";
$database_escuela2 = "escuela2";
$username_escuela2 = "root";
$password_escuela2 = "";

// Obtener las citas del usuario actual
$username = $_SESSION["username"];
$query = "SELECT * FROM alumnos WHERE Dueño = '$username'";
$result = mysqli_query($con, $query);

// Crear una tabla para mostrar las citas
$citasTable = "Datos del paciente";
while ($row = mysqli_fetch_assoc($result)) {
    $citasTable .= "<tr>";
    $citasTable .= "<td>" . $row["id"] . "</td>";
    $citasTable .= "<td>" . $row["tipo_animal"] . "</td>";
    $citasTable .= "<td>" . $row["nombre"] . "</td>";
    $citasTable .= "<td>" . $row["edad"] . "</td>";
    $citasTable .= "<td>" . $row["sintomas"] . "</td>";
    $citasTable .= "<td>" . $row["fecha"] . "</td>";
    $citasTable .= "<td>" . $row["hora"] . "</td>";
    $citasTable .= "<td>" . $row["telefono_dueño"] . "</td>";
    $citasTable .= "<td>" . $row["nombre_contacto"] . "</td>";
    $citasTable .= "<td>" . $row["telefono_contacto"] . "</td>";
    $citasTable .= "</tr>";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Citas</title>
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!-- slider stylesheet -->
    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
</head>
<body>
<header class="bg-primary text-white text-center py-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <p class="lead mb-0">Datos registrados de: <?php echo $_SESSION["username"]; ?></p>
                </div>
            </div>
        </div>
    </header>
    
       
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Mis Citas</h5>
            </div>
            <div class="card-body">
                <table class="table table-bordered mb-0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tipo de Animal</th>
                            <th>Nombre de la Mascota</th>
                            <th>Edad</th>
                            <th>Síntomas</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Tel Dueño</th>
                            <th>Nombre de Contacto</th>
                            <th>Teléfono de Contacto</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $citasTable; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <br>
    <br>
    <div class="col text-center">    
      <a href="indexUsuario.php" class="btn btn-outline-success ml-2">Regresar</a>
    </div>
  
    
  
    <br>
    <br>
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
                vetClinic@gmail.com
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </section>
  




</body>
</html>
