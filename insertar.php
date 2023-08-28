<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> Registro de datos</title>
    
</head>
<body>
<br>
<br>


<?php
//llama la conexion
require_once('conexion.php');
//conectar a la base de datos con mysqli
$con = mysqli_connect($hostname_escuela2, $username_escuela2, $password_escuela2, $database_escuela2);
//comprobar la conexion
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<div class="container mt-5">
<form action="insertar.php" method="post" class="row g-3">
  
    <div class="col-md-6">
      <label for="dueño" class="form-label">Dueño</label>
      <input type="text" class="form-control" id="dueño" name="dueño" required>
    </div>
    <div class="col-md-6">
      <label for="tipoAnimal" class="form-label">Tipo de Animal</label>
      <select class="form-select" id="tipoAnimal" name="tipoAnimal" required>
        <option value="dog">Seleccione uno</option>
        <option value="perro">Perro</option>
        <option value="gato">Gato</option>
        <option value="pajaro">Pájaro</option>
        <option value="conejo">Conejo</option>
        <option value="pez">Pez</option>
      </select>
    </div>
  
  <div class="col-md-6">
    <label for="nombre" class="form-label">Nombre de la mascota</label>
    <input type="text" class="form-control" id="nombre" name="nombre" required>
  </div>
  <div class="col-md-6">
    <label for="edad" class="form-label">Edad de la mascota</label>
    <input type="number" class="form-control" id="edad" name="edad" required>
  </div>
  <div class="col-md-6">
    <label for="sintomas" class="form-label">Síntomas</label>
    <textarea class="form-control" id="sintomas" name="sintomas" rows="3" required></textarea>
  </div>
  <div class="col-md-6">
    <label for="fecha" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="fecha" name="fecha" required>
  </div>
  <div class="col-md-6">
    <label for="hora" class="form-label">Hora</label>
    <input type="time" class="form-control" id="hora" name="hora" required>
  </div>
  <div class="col-md-6">
    <label for="telefonoDueño" class="form-label">Teléfono del Dueño</label>
    <input type="number" class="form-control" id="telefonoDueño" name="telefonoDueño" required>
  </div>
  <div class="col-md-6">
    <label for="nombreContacto" class="form-label">Nombre de Contacto</label>
    <input type="text" class="form-control" id="nombreContacto" name="nombreContacto" required>
  </div>
  <div class="mb-3">
    <label for="telefonoContacto" class="form-label">Teléfono de Contacto</label>
    <input type="number" class="form-control" id="telefonoContacto" name="telefonoContacto" required>
  </div>
  
<div class="container">
  <div class="row">
    <div class="col text-center">
      <button type="submit" class="btn btn-outline-primary" value="Insertar" name="guardar">Insertar</button>
      <a href="index.php" class="btn btn-outline-primary ml-2">Regresar</a>
    </div>
  </div>
  <div class="row mt-2">
    <div class="col text-center">
      &nbsp; <!-- Espacio en blanco -->
    </div>
  </div>
</div>
</form>
</div>
<?php
            // validar que el formulario se ha enviado
        if ( isset( $_REQUEST['guardar'])) {
            //crear la consulta
            $query = "INSERT INTO alumnos (dueño, tipo_animal, nombre, edad, sintomas, fecha, hora, telefono_dueño, nombre_contacto, telefono_contacto) VALUES ('" . $_POST['dueño'] . "', '" . $_POST['tipoAnimal'] . "', '" . $_POST['nombre'] . "', '" . $_POST['edad'] . "', '" . $_POST['sintomas'] . "', '" . $_POST['fecha'] . "', '" . $_POST['hora'] . "', '" . $_POST['telefonoDueño'] . "', '" . $_POST['nombreContacto'] . "', '" . $_POST['telefonoContacto'] . "')";
            //ejecutar la consulta
            $result = mysqli_query($con, $query);
            //comprobar el resultado de la consulta
            if ($result) {
                echo "Registro insertado correctamente";
                //redireccionar a la pagina principal
                header('Location: indexAdmin.php');
            } else {
                echo "Error al insertar el registro";
            }
        }
        //cerrar la conexion
        mysqli_close($con);
        ?>

</body>
</html>