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
    $tipo_evento = $_POST['tipo_evento'];
    $tipo_ingreso = $_POST['tipo_ingreso'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $consulta = "UPDATE ticket SET tipo_evento='$tipo_evento', tipo_ingreso='$tipo_ingreso', descripcion='$descripcion', precio='$precio', cantidad='$cantidad' WHERE id_ticket='$cod'";

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
        <a href="listar-ticket.php" class="bg-picton-blue-500 hover:bg-picton-blue-700 text-white font-bold py-2 px-4 rounded">
            Volver atras
        </a>
    </div>
    <?php
    $consulta = "SELECT * FROM ticket where id_ticket = '$cod'";
    $resultado = mysqli_query($db, $consulta);
    while ($fila = mysqli_fetch_array($resultado)) {
    ?>

        <form class="max-w-md mx-auto" method="POST" action="actualizar-ticket.php?cod=<?php echo $fila['id_ticket']; ?>">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="tipo_evento" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required value="<?php echo $fila['tipo_evento']; ?>" />
                <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tipo de Evento</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">


                <select name="tipo_ingreso" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" require value="<?php echo $fila['tipo_ingreso']; ?>">
                    <option value="1" disabled>--Seleccione una Opcion--</option>
                    <option value="Curva">Curva</option>
                    <option value="General">General</option>
                    <option value="Preferencial">Preferencial</option>
                    <option value="Butaca">Butaca</option>
                </select>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="descripcion" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required value="<?php echo $fila['descripcion']; ?>" />
                <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Descripcion</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="number" name="precio" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required value="<?php echo $fila['precio']; ?>" />
                <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Precio</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="number" name="cantidad" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required value="<?php echo $fila['cantidad']; ?>" />
                <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Cantidad</label>
            </div>

            </div>
            <button type="submit" id="Modificar" value="Modificar" name="Modificar" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modificar</button>
        </form>
    <?php
    }

    ?>
</section>