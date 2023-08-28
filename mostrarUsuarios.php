<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Datos de los pacientes</title>
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
                $query = "SELECT * FROM citas";
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
    
      <a href="index.php" class="btn btn-primary ml-2">Regresar</a>
    </div>
  </div>
<?php
//cerrar la conexion
mysqli_close($con);
?>
</body>
</html>