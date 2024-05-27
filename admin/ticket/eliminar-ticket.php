<?php
session_start();
if ($_SESSION['rol'] != 'admin') {
    header('Location:/proyectobolivar/tienda.php');
    exit;
}
require '../../includes/config/db.php';
$db = conectarDB();

$cod = $_GET['cod'];
$consulta = "DELETE FROM ticket WHERE id_ticket = '$cod'";
$resultado = mysqli_query($db, $consulta);

if ($resultado) {
    echo "
    <script>
        alert('Ticket eliminado correctamente');
    </script>
    ";
    header('Location: listar-ticket.php');
}
?>