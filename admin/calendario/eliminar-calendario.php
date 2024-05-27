<?php
session_start();
if ($_SESSION['rol'] != 'admin') {
    header('Location:/proyectobolivar/tienda.php');
    exit;
}
require '../../includes/config/db.php';
$db = conectarDB();

$cod = $_GET['cod'];
$consulta = "DELETE FROM calendario WHERE idCalendario = '$cod'";
$resultado = mysqli_query($db, $consulta);

if ($resultado) {
    echo "
    <script>
        alert('Calendario eliminado correctamente');
    </script>
    ";
    header('Location: listar-calendario.php');
}
?>