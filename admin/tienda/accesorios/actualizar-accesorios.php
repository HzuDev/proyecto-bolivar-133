<?php
session_start();
if ($_SESSION['rol'] != 'admin') {
    header('Location:/proyectobolivar/tienda.php');
    exit;
}

require '../../../includes/config/db.php';
$db = conectarDB();


$cod = $_GET['cod'];

if (isset($_POST['Modificar'])) {
    $var1 = $_POST['eti'];
    $var2 = $_POST['tit'];
    $var3 = $_POST['col'];
    $var4 = $_POST['mat'];
    $var5 = $_POST['pre'];

    $con_sql1 = "UPDATE accesorios SET etiqueta = '$var1' WHERE codigo = '$cod'";
    $con_sql2 = "UPDATE accesorios SET titulo = '$var2' WHERE codigo = '$cod'";
    $con_sql3 = "UPDATE accesorios SET color = '$var3' WHERE codigo = '$cod'";
    $con_sql4 = "UPDATE accesorios SET material = '$var4' WHERE codigo = '$cod'";
    $con_sql5 = "UPDATE accesorios SET precio = '$var5' WHERE codigo = '$cod'";

    $resm = mysqli_query($db, $con_sql1);
    $resm = mysqli_query($db, $con_sql2);
    $resm = mysqli_query($db, $con_sql3);
    $resm = mysqli_query($db, $con_sql4);
    $resm = mysqli_query($db, $con_sql5);
    if ($resm) {
        echo "
           <script>
               window.alert('registro modificado con exito');
               location.href = 'listar-accesorios.php';
           </script>
       ";
    }
}
require '../../../includes/funciones.php';
incluirTemplate('header');
require '../../../../proyectoBolivar/includes/sidebar.php';

?>

<section class="pt-16">
    <div class="flex justify-center items-center p-4 flex-col">
        <h2 class="text-center font-bold text-4xl py-8">Modificar Accesorio</h2>
        <a href="listar-accesorios.php" class="bg-picton-blue-500 hover:bg-picton-blue-700 text-white font-bold py-2 px-4 rounded">
            Volver atras
        </a>
    </div>
    <?php
    $consulta = "SELECT * FROM accesorios where codigo = '$cod'";
    $resultado = mysqli_query($db, $consulta);
    while ($fila = mysqli_fetch_array($resultado)) {
    ?>

        <form class="max-w-md mx-auto" method="POST" action="actualizar-accesorios.php?cod=<?php echo $fila['codigo']; ?>">
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="eti" id="eti" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required value="<?php echo $fila['etiqueta']; ?>" />
                <label for="eti" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Etiqueta</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="tit" id="tit" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required value="<?php echo $fila['titulo']; ?>" />
                <label for="tit" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Titulo</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="col" id="col" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required value="<?php echo $fila['color']; ?>" />
                <label for="col" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Color</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="text" name="mat" id="mat" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required value="<?php echo $fila['material']; ?>" />
                <label for="mat" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Material</label>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="number" name="pre" id="pre" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required value="<?php echo $fila['precio']; ?>" />
                <label for="pre" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Precio</label>
            </div>
            <button type="submit" id="Modificar" value="Modificar" name="Modificar" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Modificar</button>
        </form>
    <?php
    }

    ?>
</section>