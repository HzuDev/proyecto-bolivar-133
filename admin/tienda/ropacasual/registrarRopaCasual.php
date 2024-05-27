<?php
session_start();
if ($_SESSION['rol'] != 'admin') {
    header('Location:/proyectobolivar/tienda.php');
    exit;
}
require "../../../includes/config/db.php";
$db = conectarDB();

if ($_POST) {
    $e = $_POST['eti'];
    $t = $_POST['tit'];
    $s = $_POST['siz'];
    $c = $_POST['col'];
    $m = $_POST['mat'];
    $p = $_POST['pre'];

    $i = $_FILES['ima']['name'];


    $con_sql = "insert into ropaCasual(etiqueta, titulo, talla, color, material, precio, imagen, estado) 
        values('$e', '$t', '$s', '$c', '$m','$p', '$i', 'disponible')";
    $res = mysqli_query($db, $con_sql);
    if ($res) {
        $tmp = $_FILES['ima']['tmp_name'];
        @copy($tmp, 'imagenes/' . $i);
?>
        <script>
            alert("SE REGISTRO");
            location.href = 'listado.php';
        </script>
<?php
    } else
        echo "ERROR";
}

?>