<?php


session_start();
if ($_SESSION['rol'] != 'admin') {
    header('Location:/proyectobolivar/tienda.php');
    exit;
}
var_dump($_SESSION);

require '../../proyectoBolivar/includes/funciones.php';
incluirTemplate('header');

require '../../proyectoBolivar/includes/config/db.php';
$db = conectarDB();


?>
<div class="flex min-h-screen">
    <!-- Incluir el menú de navegación -->
    <?php require '../../proyectoBolivar/includes/sidebar.php';?>

    
</div>