<?php
// session_start();
// $auth = $_SESSION['login'];
// if (!$auth) {
//     header('Location:/proyectobolivar/login.php');
// }
require '../../../proyectoBolivar/includes/config/db.php';
$db = conectarDB();

$ci = "1255520";
$nombre = "cesar";
$a_paterno = "perez";
$a_materno = "loza";
$email = "admins@gmail.com";
$password = "cesar123";
$pashash = password_hash($password, PASSWORD_DEFAULT); 
var_dump($pashash);

$consulta = "INSERT INTO usuario (ci, nombre, a_paterno, a_materno, email, password) values ('$ci','$nombre', '$a_paterno', '$a_materno', '$email',  '$pashash')";

mysqli_query($db, $consulta);
?>
