<?php
session_start();
if ($_SESSION['rol'] != 'admin') {
    header('Location:/proyectobolivar/tienda.php');
    exit;
}
require '../../includes/config/db.php';
$db = conectarDB();
require '../../includes/funciones.php';
incluirTemplate('header');

$cod = $_GET['cod'];


if (isset($_POST['Modificar'])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $equipoLocal = $_POST['equipo_local'];
    $equipoVisitante = $_POST['equipo_visitante'];
    $hora = $_POST['hora'];
    $lugar = $_POST['lugar'];
    $fecha = $_POST['fecha'];
    $imagenEquipoLocal = $_FILES['imagen_uno']['name'];
    $imagenEquipoVisitante = $_FILES['imagen_dos']['name'];

    $consulta = "UPDATE calendario SET titulo='$titulo', descripcion='$descripcion', equipoUno='$equipoLocal', equipoDos='$equipoVisitante', hora='$hora', lugar='$lugar', fecha='$fecha', equipoImagenUno='$imagenEquipoLocal', equipoImagenDos='$imagenEquipoVisitante' WHERE idCalendario='$cod'";

    $tmp = $_FILES['imagen_uno']['tmp_name'];
    $tmp2 = $_FILES['imagen_dos']['tmp_name'];
    move_uploaded_file($tmp, 'img/' . $imagenEquipoLocal);
    move_uploaded_file($tmp2, 'img/' . $imagenEquipoVisitante);

    $resultado = mysqli_query($db, $consulta);

    if ($resultado) {
        echo "
            <script>
                window.alert('Registro modificado con éxito');
            </script>
        ";
    } else {
        echo "
            <script>
                window.alert('Error al modificar el registro');
            </script>
        ";
    }
}


require '../../../proyectoBolivar/includes/sidebar.php';

?>

<section class="pt-16">
    <div class="flex justify-center items-center p-4 flex-col">
        <h2 class="text-center font-bold text-4xl py-8">Modificar el Calendario</h2>
        <a href="listar-calendario.php" class="bg-picton-blue-500 hover:bg-picton-blue-700 text-white font-bold py-2 px-4 rounded">
            Volver atras
        </a>
    </div>
    <?php
    $consulta = "SELECT * FROM calendario where idCalendario = '$cod'";
    $resultado = mysqli_query($db, $consulta);
    while ($fila = mysqli_fetch_array($resultado)) {
    ?>

        <form class="max-w-md mx-auto" method="POST" action="actualizar-calendario.php?cod=<?php echo $fila['idCalendario']; ?>" enctype="multipart/form-data">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="titulo" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?php echo $fila['titulo']; ?>" />
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"></label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="descripcion" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?php echo $fila['descripcion']; ?>" />
                <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"></label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="equipo_local" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?php echo $fila['equipoUno']; ?>" />
                <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"></label>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="equipo_visitante" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?php echo $fila['equipoDos']; ?>" />
                    <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"></label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="time" name="hora" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?php echo $fila['hora']; ?>" />
                    <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"></label>
                </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="lugar" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?php echo $fila['lugar']; ?>" />
                    <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"></label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="date" name="fecha" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?php echo $fila['fecha']; ?>" />
                    <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-900 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"></label>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <img class="text-center" src="img/<?php echo $fila['equipoImagenUno']; ?>" alt="Imagen actual" width="50" height="50" />
                    <input type="file" name="imagen_uno" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?php echo $fila['equipoImagenUno']; ?>" />
                    <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"></label>
                </div>

                <div class="relative z-0 w-full mb-5 group">
                    <img class="text-center" src="img/<?php echo $fila['equipoImagenDos']; ?>" alt="Imagen actual" width="50" height="50" />

                    <input type="file" name="imagen_dos" id="floating_company" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_company" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6"></label>
                </div>

            </div>
            <button type="submit" id="Modificar" value="Modificar" name="Modificar" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modificar</button>
        </form>
    <?php
    }

    ?>
</section>