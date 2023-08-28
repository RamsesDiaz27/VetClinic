<?php 

include 'conexion.php';

error_reporting(0);
session_start();


$nombre = $_POST['txtNombre'];
$paterno = $_POST['txtPaterno'];
$materno = $_POST['txtMaterno'];

$query = "SELECT MAX(id) AS max_id FROM usuarios";
$query_result = $con->query($query);
$row = $query_result->fetch_assoc();
$numero_secuencial = $row['max_id'];
$codigo = $paterno . $numero_secuencial;

$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];
$cuenta = $_POST['txtCuentaBancaria'];
$direccion = $_POST['txtDireccion'];
$cp = $_POST['txtCodigoPostal'];
$telefono = $_POST['txtTelefono'];
$rfc = $_POST['txtRFC'];
$id_rol = '2';


$sql = "INSERT INTO usuarios (codigo, nombre, apellido_paterno, apellido_materno, telefono, correo_electronico, contraseña, cuenta_bancaria, direccion, codigo_postal, rfc, id_rol)
    VALUES ('$codigo', '$nombre', '$paterno', '$materno', '$telefono', '$email', '$password', '$cuenta', '$direccion', '$cp', '$rfc', '$id_rol')";
$result = mysqli_query($con, $sql);
if ($result === TRUE) {
  echo "<script>alert('Registro completo')</script>";
  header("Location: indexLogin.php");
} else {
  echo "<script>alert('Algo salió mal')</script>";
  }

?>