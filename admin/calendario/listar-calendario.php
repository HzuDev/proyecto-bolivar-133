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

require '../../../proyectoBolivar/includes/sidebar.php';

?>



<div class="relative overflow-x-auto shadow-md sm:rounded-lg pt-24 pl-24">
    <div class=" p-4 pl-8 ">
        <a href="crear-calendario.php" class="bg-picton-blue-500 hover:bg-picton-blue-700 text-white font-bold py-2 px-4 rounded">
            Nuevo Calendario
        </a>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Titulo
                </th>
                <th scope="col" class="px-6 py-3">
                    descripcion
                </th>
                <th scope="col" class="px-6 py-3">
                    Equipo Local
                </th>
                <th scope="col" class="px-6 py-3">
                    Equipo Visitante
                </th>
                <th scope="col" class="px-6 py-3">
                    Hora
                </th>
                <th scope="col" class="px-6 py-3">
                    Lugar
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha
                </th>
                <th scope="col" class="px-6 py-3">
                    Imagen Equipo Local
                </th>
                <th scope="col" class="px-6 py-3">
                    Imagen Equipo Visitante
                </th>
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consultaSql = "SELECT * FROM calendario ";
            $respuesa = mysqli_query($db, $consultaSql);
            while ($calendario = mysqli_fetch_array($respuesa)) {
            ?>
                <tr class="bg-white border-b ">
                    <td class="px-6 py-4"> <?php echo $calendario['idCalendario']; ?> </td>

                    <td class="px-6 py-4"> <?php echo $calendario['titulo']; ?> </td>
                    <td class="px-6 py-4"> <?php echo $calendario['descripcion']; ?> </td>
                    <td class="px-6 py-4"> <?php echo $calendario['equipoUno']; ?> </td>
                    <td class="px-6 py-4"> <?php echo $calendario['equipoDos']; ?> </td>
                    <td class="px-6 py-4"> <?php echo $calendario['hora']; ?> </td>
                    <td class="px-6 py-4"> <?php echo $calendario['lugar']; ?> </td>

                    <td class="px-6 py-4"> <?php echo $calendario['fecha']; ?> </td>
                    
                    <td class="px-6 py-4"> <img src="img/<?php echo $calendario['equipoImagenUno']; ?>" width="30" height="30" /> </td>

                    <td class="px-6 py-4"> <img src="img/<?php echo $calendario['equipoImagenDos']; ?>" width="30" height="30" /> </td>

                    <div>
                        <td class="px-6 py-4">
                            <a href="actualizar-calendario.php?cod=<?php echo $calendario['idCalendario']; ?>" class="text-indigo-600 hover:text-indigo-900">Modificar</a>
                            <a href="eliminar-calendario.php?cod=<?php echo $calendario['idCalendario']; ?>" class="text-red-600 hover:text-red-900">Eliminar</a>
                        </td>
                    </div>
                </tr>

            <?php
            }
            ?>

        </tbody>
    </table>
</div>