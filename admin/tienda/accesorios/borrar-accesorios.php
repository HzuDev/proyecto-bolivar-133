<?php
session_start();
if ($_SESSION['rol'] != 'admin') {
    header('Location:/proyectobolivar/tienda.php');
    exit;
}
require '../../../includes/config/db.php';
$db = conectarDB();

?>
<main class="contenedor seccion">
    <h1>Eliminar</h1>
</main>

<?php
$cod = $_GET['cod'];
$con_sql = "UPDATE accesorios SET estado = 'No disponible' where codigo = '$cod'";
$res = mysqli_query($db, $con_sql);
if ($res) {
    echo "
            <script>
                alert('Se elimino');
                location.href = 'listar-accesorios.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('No se elimino');
            </script>
        ";
}
?>