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



<div class="relative overflow-x-auto  shadow-md sm:rounded-lg pt-28 pl-24">
 
    <div class=" p-4 pl-8">
        <a href="crear-ticket.php" class="bg-picton-blue-500 hover:bg-picton-blue-700 text-white font-bold py-2 px-4 rounded">
            Nuevo Ticket
        </a>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Id
                </th>
                <th scope="col" class="px-6 py-3">
                    Tipo de Evento
                </th>
                <th scope="col" class="px-6 py-3">
                    Tipo de Ingreso
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripcion
                </th>
                <th scope="col" class="px-6 py-3">
                    Precio
                </th>
                <th scope="col" class="px-6 py-3">
                    Cantidad
                </th>

                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $consultaSql = "SELECT * FROM ticket ";
            $respuesa = mysqli_query($db, $consultaSql);
            while ($ticket = mysqli_fetch_array($respuesa)) {
            ?>
                <tr class="bg-white border-b ">
                    <td class="px-6 py-4"> <?php echo $ticket['id_ticket']; ?> </td>

                    <td class="px-6 py-4"> <?php echo $ticket['tipo_evento']; ?> </td>
                    <td class="px-6 py-4"> <?php echo $ticket['tipo_ingreso']; ?> </td>
                    <td class="px-6 py-4"> <?php echo $ticket['descripcion']; ?> </td>
                    <td class="px-6 py-4"> <?php echo $ticket['precio']; ?> </td>
                    <td class="px-6 py-4"> <?php echo $ticket['cantidad']; ?> </td>



                    <div>
                        <td class="px-6 py-4">
                            <a href="actualizar-ticket.php?cod=<?php echo $ticket['id_ticket']; ?>" class="text-indigo-600 hover:text-indigo-900">Modificar</a>
                            <a href="eliminar-ticket.php?cod=<?php echo $ticket['id_ticket']; ?>" class="text-red-600 hover:text-red-900">Eliminar</a>
                        </td>
                    </div>
                </tr>

            <?php
            }
            ?>

        </tbody>
    </table>
</div>