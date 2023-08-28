<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Actualización de datos</title>
</head>
<body>

<?php
//llamar la conexion
require_once('conexion.php');
//conectar a la base de datos escuela con mysqli
$con = mysqli_connect($hostname_escuela2, $username_escuela2, $password_escuela2, $database_escuela2);
//comprobar la conexion
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<div class="container mt-5">
<!-- crear un formulario para editar registros en la tabla alumnos -->
<form action="editar.php" method="post" class="row g-3">
    <?php
    // consultar un registro de la tabla alumnos
    $query = "SELECT * FROM alumnos WHERE id = " . $_REQUEST['id'];
    //ejecutar la consulta
    $result = mysqli_query($con, $query);
    //recorrer el resultado de la consulta
    while ($row = mysqli_fetch_array($result)) {
        ?>
    <div class="col-md-6">
        <label for="dueño" class="form-label">Dueño</label>
        <input type="text" class="form-control" name="dueño" id="dueño" value="<?php echo $row['dueño']; ?>">
    </div>
    <div class="col-md-6">
        <label for="tipoAnimal" class="form-label">Tipo de animal</label>
        <select class="form-select" name="tipoAnimal" id="tipoAnimal" value="<?php echo $row['tipo_animal']; ?>">
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
        <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>">
    </div>
    <div class="col-md-6">
        <label for="edad" class="form-label">Edad de la mascota</label>
        <input type="number" class="form-control" name="edad" id="edad" value="<?php echo $row['edad']; ?>">
    </div>
    <div class="col-md-6">
        <label for="sintomas" class="form-label">Sintomas</label>
        <input type="text"  class="form-control" name="sintomas" id="sintomas" value="<?php echo $row['sintomas']; ?>">
    </div>
    <div class="col-md-6">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" name="fecha" id="fecha" value="<?php echo $row['fecha']; ?>">
    </div>
        <div class="col-md-6">
        <label for="hora" class="form-label">Hora</label>
        <input type="time" class="form-control" name="hora" id="hora" value="<?php echo $row['hora']; ?>">
    </div>
    <div class="col-md-6">
        <label for="telefonoDueño" class="form-label">Telefono del dueño</label>
        <input type="number"  class="form-control" name="telefonoDueño" id="telefonoDueño" value="<?php echo $row['telefono_dueño']; ?>">
    </div>
    <div class="col-md-6">
        <label for="nombreContacto" class="form-label">Nombre de un contacto</label>
        <input type="text" class="form-control" name="nombreContacto" id="nombreContacto" value="<?php echo $row['nombre_contacto']; ?>">
    </div>
    <div class="col-md-6">
        <label for="telefonoContacto" class="form-label">Telefono del contacto</label>
        <input type="text" class="form-control" name="telefonoContacto" id="telefonoContacto" value="<?php echo $row['telefono_contacto']; ?>">
    </div>
    <input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
  <div class="col-12 text-center">
        
        <input type="submit" class="btn btn-outline-primary" value="Guardar" name="guardar">
        <a href="indexAdmin.php" class="btn btn-outline-success ml-2">Regresar</a>
    </div>
        <?php
    }
    ?>
    </div>
</form>
<?php
// validar que el formulario se ha enviado
if ( isset( $_REQUEST['guardar'])) {
    //crear la consulta
    $query = "UPDATE alumnos SET dueño='" . $_POST['dueño'] . "', tipo_animal='" . $_POST['tipoAnimal'] . "', nombre='" . $_POST['nombre'] . "', edad='" . $_POST['edad'] . "', sintomas='" . $_POST['sintomas'] . "', fecha='" . $_POST['fecha'] . "', hora='" . $_POST['hora'] . "', telefono_dueño='" . $_POST['telefonoDueño'] . "', nombre_contacto='" . $_POST['nombreContacto'] . "', telefono_contacto='" . $_POST['telefonoContacto'] . "' WHERE id=" . $_REQUEST['id'];
    //ejecutar la consulta
    $result = mysqli_query($con, $query);
    //comprobar el resultado de la consulta
    if ($result) {
        echo "Registro editado correctamente";
        //redireccionar a la pagina principal
        header('Location: indexAdmin.php');
    } else {
        echo "Error al editar el registro";
    }
}
//cerrar la conexion
mysqli_close($con);
?>
</body>
</html>