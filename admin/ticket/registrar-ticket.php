<?php
session_start();
if ($_SESSION['rol'] != 'admin') {
    header('Location:/proyectobolivar/tienda.php');
    exit;
}
require '../../includes/config/db.php';
$db = conectarDB();
if ($_POST) {
    $tipo_evento = $_POST['tipo_evento'];
    $tipo_ingreso = $_POST['tipo_ingreso'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];


    if (empty($errores)) {
        $query = "INSERT INTO ticket (tipo_evento, tipo_ingreso, descripcion, precio, cantidad) VALUES ('$tipo_evento', '$tipo_ingreso', '$descripcion', '$precio', '$cantidad')";

        $resultado = mysqli_query($db, $query);
        if ($resultado) {

            echo "
            <script>
                window.alert('Registro creado con éxito');
            </script>
            ";
            header('Location: listar-ticket.php');
        }
    }
}
