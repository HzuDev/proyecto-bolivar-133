<?php
session_start();
if ($_SESSION['rol'] != 'admin') {
    header('Location:/proyectobolivar/tienda.php');
    exit;
}
require "../../../includes/config/db.php";
$db = conectarDB();
require "../../../includes/funciones.php";
incluirTemplate('header');
require '../../../../proyectoBolivar/includes/sidebar.php';

?>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg pt-24 pl-24">
    <div class=" p-4 pl-8">
        <a href="crear-ropa-casual.php" class="bg-picton-blue-500 hover:bg-picton-blue-700 text-white font-bold py-2 px-4 rounded">
            Nuevo Prenda
        </a>
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
                <th scope="col" class="px-6 py-3">Codigo</th>
                <th scope="col" class="px-6 py-3">Etiqueta</th>
                <th scope="col" class="px-6 py-3">Titulo</th>
                <th scope="col" class="px-6 py-3">Talla</th>
                <th scope="col" class="px-6 py-3">Color</th>
                <th scope="col" class="px-6 py-3">Material</th>
                <th scope="col" class="px-6 py-3">Precio</th>
                <th scope="col" class="px-6 py-3">Imagen</th>

                <th colspan="2">Acciones</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $consql = "SELECT * FROM ropaCasual WHERE estado ='disponible'";
            $res = mysqli_query($db, $consql);
            while ($fila = mysqli_fetch_array($res)) {
            ?>
                <tr class="bg-white border-b ">
                    <td class="px-6 py-4"> <?php echo $fila['codigo']; ?></td>
                    <td class="px-6 py-4"> <?php echo $fila['etiqueta']; ?> </td>
                    <td class="px-6 py-4"> <?php echo $fila['titulo']; ?> </td>
                    <td class="px-6 py-4"> <?php echo $fila['talla']; ?> </td>
                    <td class="px-6 py-4"> <?php echo $fila['color']; ?> </td>
                    <td class="px-6 py-4"> <?php echo $fila['material']; ?> </td>
                    <td class="px-6 py-4"> <?php echo $fila['precio']; ?></td>

                    <td> <img src="imagenes/<?php echo $fila['imagen']; ?>" width="30" height="30"> </td>

                    <div>
                        <td class="px-6 py-4">
                            <a href="actualizar-ropa-casual.php?cod=<?php echo $fila['codigo']; ?>" class="text-indigo-600 hover:text-indigo-900">Modificar</a>
                            <a href="borrar-ropa-casual.php?cod=<?php echo $fila['codigo']; ?>" class="text-red-600 hover:text-red-900">Eliminar</a>
                        </td>
                    </div>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
</div>