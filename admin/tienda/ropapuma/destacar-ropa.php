<?php
session_start();
if ($_SESSION['rol'] != 'admin') {
    header('Location:/proyectobolivar/tienda.php');
    exit;
}
require "../../../includes/config/db.php";
$db = conectarDB();

if (isset($_GET['cod'])) {
    $codigo = $_GET['cod'];
    $consql = "UPDATE ropaPuma SET prod_destacado = NOT prod_destacado WHERE codigo = $codigo";
    mysqli_query($db, $consql);
}

header('Location: listar-ropa-puma.php');
