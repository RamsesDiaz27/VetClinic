<?php

include 'conexion.php';

session_start();


$email = $_POST["txtEmail"];
$password = $_POST["txtPassword"];

if ($email == 'admin@admin.com') {
  $role = '1';
} else {
  $role = '2';
}

//require_once('conexion.php');Importante!
//conectar a la base de datos escuela con mysqli
$con = mysqli_connect($hostname_escuela2, $username_escuela2, $password_escuela2, $database_escuela2);
$sql = mysqli_query($con,"SELECT * FROM usuarios WHERE correo_electronico ='$email' and contraseña = '$password' and id_rol = '$role'");

// Después de verificar las credenciales del usuario y antes de redirigirlo a indexUsuario.php
if (mysqli_num_rows($sql) == 1 ) { 
  $row = mysqli_fetch_assoc($sql);
  $_SESSION["username"] = $row["codigo"]; // Asumiendo que el nombre de usuario está en la columna 'nombre_de_usuario'
  
  if ($role == '2') {
      header("Location: indexUsuario.php");
  } else if ($role == '1') {
      header("Location: index.php");
  }
} else {
  echo "<script> alert('Usuario o contraseña incorrecto');window.location= 'indexLogin.php' </script>";
}
?>