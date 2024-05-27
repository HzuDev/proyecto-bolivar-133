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
    $c = $_POST['col'];
    $m = $_POST['mat'];
    $p = $_POST['pre'];

    $i = $_FILES['ima']['name'];


    $con_sql = "insert into accesorios(etiqueta, titulo, color, material, precio, imagen, estado) 
        values('$e', '$t', '$c', '$m', '$p', '$i', 'disponible')";
    $res = mysqli_query($db, $con_sql);
    if ($res) {
        $tmp = $_FILES['ima']['tmp_name'];
        @copy($tmp, 'imagenes/' . $i);
?>
        <script>
            alert("SE REGISTRO");
            location.href = 'listar-accesorio.php';
        </script>
<?php
    } else
        echo "ERROR";
}

?>