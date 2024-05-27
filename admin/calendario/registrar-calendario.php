<?php
session_start();
if ($_SESSION['rol'] != 'admin') {
    header('Location:/proyectobolivar/tienda.php');
    exit;
}
require '../../includes/config/db.php';
$db = conectarDB();
if ($_POST) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $equipoLocal = $_POST['equipo_local'];
    $equipoVisitante = $_POST['equipo_visitante'];
    $hora = $_POST['hora'];
    $lugar = $_POST['lugar'];
    $fecha = $_POST['fecha'];
    $imagenEquipoLocal = $_FILES['imagen_uno']['name'];
    $imagenEquipoVisitante = $_FILES['imagen_dos']['name'];

    if (empty($errores)) {
        $query = "INSERT INTO calendario (titulo, descripcion, equipoUno, equipoDos, hora, lugar, fecha, equipoImagenUno, equipoImagenDos) VALUES ('$titulo', '$descripcion', '$equipoLocal', '$equipoVisitante', '$hora', '$lugar', '$fecha', '$imagenEquipoLocal', '$imagenEquipoVisitante')";

        $resultado = mysqli_query($db, $query);
        if ($resultado) {
            $tmp = $_FILES['imagen_uno']['tmp_name'];
            $tmp2 = $_FILES['imagen_dos']['tmp_name'];

            @copy($tmp, 'img/' . $imagenEquipoLocal);
            @copy($tmp2, 'img/' . $imagenEquipoVisitante);

            echo "
            <script>
                window.alert('Registro creado con éxito');
            </script>
            ";
            header('Location: listar-calendario.php');
        }
    }
}
