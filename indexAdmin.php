<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Datos de los pacientes</title>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
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

</head>
<body>
<?php
//quitar notificaciones de error de php
error_reporting(0);
//importa las variables de conexion
require_once('conexion.php');
//conectar a la base de datos escuela con mysqli
$con = mysqli_connect($hostname_escuela2, $username_escuela2, $password_escuela2, $database_escuela2);
//comprobar la conexion
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<!-- crear una tabla con los datos de la tabla alumnos -->
<div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Dueño</th>
                    <th>Tipo de animal</th>
                    <th>Nombre de la mascota</th>
                    <th>Edad</th>
                    <th>Síntomas</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Teléfono del dueño</th>
                    <th>Nombre del contacto</th>
                    <th>Teléfono del contacto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //crear la consulta
                $query = "SELECT * FROM alumnos";
                //ejecutar la consulta
                $result = mysqli_query($con, $query);
                //recorrer el resultado de la consulta
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['dueño']; ?></td>
                        <td><?php echo $row['tipo_animal']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['edad']; ?></td>
                        <td><?php echo $row['sintomas']; ?></td>
                        <td><?php echo $row['fecha']; ?></td>
                        <td><?php echo $row['hora']; ?></td>
                        <td><?php echo $row['telefono_dueño']; ?></td>
                        <td><?php echo $row['nombre_contacto']; ?></td>
                        <td><?php echo $row['telefono_contacto']; ?></td>
                        <td>
  <div class="btn-group-vertical btn-block" role="group">
    <a href="editar.php?id=<?php echo $row['id'];?>" class="btn btn-outline-primary mb-2">Editar</a>
    <a href="eliminar.php?id=<?php echo $row['id'];?>" class="btn btn-outline-danger">Eliminar</a>
  </div>
</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    <!-- crear link que mande al archivo insertar.php -->
    <!--<a href="insertar.php">Insertar</a>-->
   
   
<div class="container">
  <div class="row">
    <div class="col text-center">
    <a href="insertar.php" class="btn btn-outline-dark">Registrar</a>
      <a href="index.php" class="btn btn-outline-success ml-2">Regresar</a>
    </div>
  </div>
<?php
//cerrar la conexion
mysqli_close($con);
?>
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