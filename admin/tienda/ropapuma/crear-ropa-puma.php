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
<main class="pt-16">
    <div class="flex justify-center items-center p-4 flex-col">
        <h1 class="text-center font-bold text-4xl py-8">Crear</h1>
        <a href="listar-ropa-puma.php" class="bg-picton-blue-500 hover:bg-picton-blue-700 text-white font-bold py-2 px-4 rounded">
            Volver
        </a>
    </div>
    <form class="max-w-md mx-auto" method="POST" action="registrarRopaPuma.php" enctype="multipart/form-data">
        <fieldset class="w-full mb-5 group">
            <legend class="text-center font-bold text-2xl py-8">Informacion General</legend>

            <label for="eti" class="block text-sm text-gray-500"></label>
            <input type="text" name="eti" id="eti" placeholder="Etiqueta" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required />

            <label for="tit" class="block text-sm text-gray-500"></label>
            <input type="text" name="tit" id="tit" placeholder="Titulo" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required />


            <label for="siz" class="block text-sm text-gray-500"></label>
            <input type="text" name="siz" id="siz" placeholder="Talla" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required />

            <label for="col" class="block text-sm text-gray-500"></label>
            <input type="text" name="col" id="col" placeholder="Color" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required />

            <label for="mat" class="block text-sm text-gray-500"></label>
            <input type="text" name="mat" id="mat" placeholder="Material" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required />

            <label for="pre" class="block text-sm text-gray-500"></label>
            <input type="number" name="pre" id="pre" placeholder="Precio" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required />

            <label for="ima" class="block text-sm text-gray-500"></label>
            <input type="file" name="ima" id="ima" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-gray-900 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" required />


        </fieldset>


        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear Prenda</button>
    </form>


</main>