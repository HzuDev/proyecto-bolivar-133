<?php
require 'includes/config/db.php';
$db = conectarDB();

if (!isset($_POST['category'])) {
    die('No se proporcionó ninguna categoría');
}


$category = $_POST['category'];
$query = "SELECT * FROM $category";
$res = $db->query($query);

while ($row = $res->fetch_assoc()) {
    $rutaImagen = "/proyectoBolivar/admin/tienda/$category/imagenes/" . $row['imagen'];
    echo '<li class="list-none">';
    echo '<a href="#" class="group block overflow-hidden relative">';
    echo '<span class="absolute top-0 left-0 w-28 translate-y-4 -translate-x-6 -rotate-45 bg-black text-center text-sm text-white">Sale</span>';
    echo '<img src="' . $rutaImagen . '" alt="' . $row['titulo'] . '" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />';
    echo '<div class="relative bg-white pt-3">';
    echo '<h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">';
    echo $row['titulo'];
    echo '</h3>';
    echo '<p class="mt-2">';
    echo '<span class="sr-only"> Regular Price </span>';
    echo '<span class="tracking-wider text-gray-900"> BOB ' . number_format($row['precio'], 2) . ' </span>';
    echo '</p>';
    echo '</div>';
    echo '</a>';
    echo '</li>';
}
