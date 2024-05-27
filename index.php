<?php

require 'includes/funciones.php';
incluirTemplate('header');
require_once 'includes/config/db.php';
$db = conectarDB();

?>

<body>

    <section class="bg-picton-blue-600">
        <div class="relative w-full">

            <div class="min-h-screen flex">
                <div class="container m-auto px-6 py-40 md:px-12 lg:py-0 lg:px-7">
                    <div class="flex items-center flex-wrap gap-12 lg:gap-0">
                        <div class="lg:w-5/12 space-y-8">
                            <span class="flex space-x-2">
                                <span class="block w-14 mb-2 border-b-2 border-picton-blue-900"></span>
                                <span class="font-bold text-picton-blue-900 ">Lo ultimo de nuestra ropa</span>
                            </span>
                            <h1 class="text-4xl font-bold md:text-6xl dark:text-white">Vive la <br>la pasión del Club Bolivar</h1>
                            <p class="text-xl text-gray-700 dark:text-gray-300">Compra ahora y únete a las filas celestes!</p>

                            <div class="flex space-x-4">
                                <button type="button" title="Start buying" class="w-full py-3 px-6 text-center transition bg-gray-900 dark:bg-gray-700 hover:bg-gray-800 active:bg-gray-700 focus:bg-gray-800 sm:w-max">
                                    <span class="block text-white font-semibold">
                                        Compra Ahora
                                    </span>
                                </button>
                                <button type="button" title="Start buying" class="group w-full py-3 px-6 text-center transition dark:active:bg-yellow-800 dark:focus:bg-yellow-900 active:bg-yellow-200 focus:bg-yellow-100 sm:w-max">
                                    <span class="block text-gray-700 dark:text-white font-semibold group-focus:text-yellow-700 dark:group-focus:text-yellow-100">
                                        Compra entradas
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="hidden relative md:block lg:w-7/12">
                            <div aria-hidden="true" class="absolute inset-0 m-auto w-[30rem] h-[30rem] rounded-full bg-picton-blue-50">

                            </div>
                            <?php
                            $consql = "SELECT * FROM ropapuma WHERE prod_destacado = 1 LIMIT 1";
                            $res = mysqli_query($db, $consql);
                            $fila = mysqli_fetch_array($res);
                            ?>
                            <div class="flex items-center justify-center">

                                <img src="/proyectoBolivar/admin/tienda/ropapuma/imagenes/<?php echo $fila['imagen']; ?>" class="relative" height="300" width="300" alt="<?php echo $fila['titulo']; ?>">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="absolute bottom-8 w-full">
                    <div class="container m-auto px-6 flex items-end justify-between md:px-12 lg:px-7">
                        <a href="" class="hidden space-x-4 md:flex md:items-center">
                            <img class="w-14 h-14 rounded-full object-cover" src="images/user.png" alt="">
                            <div class="text-gray-600 dark:text-gray-400">
                                <span class="text-sm">Question ?</span>
                                <p class="font-semibold text-gray-700 dark:text-gray-300">Talk to our assistant</p>
                            </div>
                        </a>
                        <div>
                            <a href="#" class="hover:text-yellow-700 dark:text-gray-300 dark:hover:text-red-400">Facebook /</a>
                            <a href="#" class="hover:text-yellow-700 dark:text-gray-300 dark:hover:text-red-400">YouTube / </a>
                            <a href="#" class="hover:text-yellow-700 dark:text-gray-300 dark:hover:text-red-400">Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pt-10">
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
                    <div class="flex items-center gap-12">
                        <h3 class="text-2xl font-bold text-gray-800 lg:text-3xl">
                            Ultimas Noticias
                        </h3>

                        <p class="hidden max-w-screen-sm text-gray-500 md:block">
                            Obten las ultimas noticias de nuestro club
                        </p>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
                    <a href="https://clubbolivar.com/comunicado-oficial-8/" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80" target="_blank">
                        <img src="https://clubbolivar.com/wp-content/uploads/2024/01/Comunicados-e1706636193556-1280x605.jpg" alt="Bolivar" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                        <div class="relative ml-4 mb-3 inline-block bg-black bg-opacity-50 rounded px-2">
                            <span class="text-sm text-white md:text-lg">
                                Comunicado Oficial
                            </span>
                        </div>
                    </a>

                    <a href="https://clubbolivar.com/sajama-x-bolivar-una-joya-en-tus-manos/" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80" target="_blank">
                        <img src="https://clubbolivar.com/wp-content/uploads/2024/03/WhatsApp-Image-2024-03-28-at-15.32.38-e1711658255853-640x418.jpeg" loading="lazy" alt="Reloj Sahara Bolivar" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                        <div class="relative ml-4 mb-3 inline-block bg-black bg-opacity-50 rounded px-2">
                            <span class="text-sm text-white md:text-lg">
                                SAJAMA X BOLÍVAR: UNA JOYA EN TUS MANOS
                            </span>
                        </div>
                    </a>

                    <a href="https://clubbolivar.com/campeonas-invictas/" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:col-span-2 md:h-80" target="_blank">
                        <img src="https://clubbolivar.com/wp-content/uploads/2024/03/WhatsApp-Image-2024-03-25-at-11.28.21-2-e1711380810520-1280x702.jpeg" loading="lazy" alt="Campeonas Bolivar" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                        <div class="relative ml-4 mb-3 inline-block bg-black bg-opacity-50 rounded px-2">
                            <span class="text-sm text-white md:text-lg">
                                ¡CAMPEONAS INVICTAS!
                            </span>
                        </div>
                    </a>

                    <a href="https://clubbolivar.com/bolivar-se-enfrento-a-la-seleccion-de-viacha/" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80" target="_blank">
                        <img src="https://clubbolivar.com/wp-content/uploads/2024/03/777f15ef7a6-fc23-4660-a6b2-cd2bb0856144-640x427.jpeg" loading="lazy" alt="Viacha Selecciones" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                        <div class="relative ml-4 mb-3 inline-block bg-black bg-opacity-50 rounded px-2">
                            <span class="text-sm text-white md:text-lg">
                                BOLÍVAR SE ENFRENTÓ A LA SELECCIÓN DE VIACHA
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="">
        <?php
        $consulta = "SELECT * FROM calendario ORDER BY idCalendario DESC LIMIT 2";

        $resultado = mysqli_query($db, $consulta);
        $partidos = [];
        while ($calendario = $resultado->fetch_assoc()) {
            $partidos[] = $calendario;
        }

        $partido1 = $partidos[0];
        $partido2 = $partidos[1];
        ?>
        <div class=" px-8 py-12 mx-auto md:px-12 lg:px-32 max-w-7xl">
            <h2 class="text-center font-bold text-2xl mb-10">
                Proximos Partidos
            </h2>
            <div class="grid grid-cols-2 text-sm font-medium text-gray-500 gap-x-2 gap-y-12 lg:gap-y-16 text-balance">
                <div>
                    <div class="flex flex-col justify-between px-4">
                        <div>
                            <p class="text-base text-gray-900 font-bold">
                                <?php echo $partido1['titulo']; ?>
                            </p>
                            <p class="mt-2">
                                <?php echo $partido1['descripcion']; ?>
                            </p>
                            <div class="font-semibold">
                                <p><?php echo $partido1['equipoUno']; ?></p>
                                <p><?php echo $partido1['equipoDos']; ?></p>
                                <p>
                                    Hora: <span class="font-light"> <?php echo $partido1['hora']; ?></span>
                                </p>
                                <p>
                                    Estadio:
                                    <span class="font-light"> <?php echo $partido1['lugar']; ?></span>
                                </p>
                                <p>
                                    Fecha: <span class="font-light"> <?php echo $partido1['fecha']; ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 mt-4 overflow-hidden border-picton-blue-600 border-4 rounded flex flex-row  items-center">
                        <img src="/proyectoBolivar/admin/calendario/img/<?php echo $partido1['equipoImagenUno']; ?>" alt="equipo local " class="w-14 h-14 mx-auto rounded-2xl" />
                        <span>VS</span>
                        <img src="/proyectoBolivar/admin/calendario/img/<?php echo $partido1['equipoImagenDos']; ?>" alt="equipo visitante" class="w-14 h-14 mx-auto rounded-2xl" />
                    </div>
                </div>
                <div>
                    <div class="flex flex-col justify-between px-4">
                        <div>
                            <p class="text-base text-gray-900 font-bold">
                                <?php echo $partido2['titulo']; ?>
                            </p>
                            <p class="mt-2">
                                <?php echo $partido2['descripcion']; ?>
                            </p>
                            <div class="font-semibold">
                                <p><?php echo $partido2['equipoUno']; ?></p>
                                <p><?php echo $partido2['equipoDos']; ?></p>
                                <p>
                                    Hora: <span class="font-light"> <?php echo $partido2['hora']; ?></span>
                                </p>
                                <p>
                                    Estadio:
                                    <span class="font-light"> <?php echo $partido2['lugar']; ?></span>
                                </p>
                                <p>
                                    Fehcha: <span class="font-light"> <?php echo $partido2['fecha']; ?></span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 mt-4 overflow-hidden border-picton-blue-600 border-4 rounded flex flex-row  items-center">
                        <img src="/proyectoBolivar/admin/calendario/img/<?php echo $partido2['equipoImagenUno']; ?>" alt="equipo local " class="w-14 h-14 mx-auto rounded-2xl" />
                        <span>VS</span>
                        <img src="/proyectoBolivar/admin/calendario/img/<?php echo $partido2['equipoImagenDos']; ?>" alt="equipo visitante" class="w-14 h-14 mx-auto rounded-2xl" />
                    </div>
                </div>
            </div>

        </div>




    </section>



    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="text-center">
                <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Productos Destacados</h2>
                <p class="mx-auto mt-4 max-w-md text-gray-500">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque praesentium cumque iure
                    dicta incidunt est ipsam, officia dolor fugit natus?
                </p>
            </header>

            <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">

                <?php
                $consql = "SELECT * FROM ropapuma WHERE prod_destacado = 1 LIMIT 4";
                $res = mysqli_query($db, $consql);
                while ($fila = mysqli_fetch_array($res)) {
                ?>

                    <li>
                        <a href="#" class="group block overflow-hidden">

                            <img src="/proyectoBolivar/admin/tienda/ropapuma/imagenes/<?php echo $fila['imagen']; ?>" alt="<?php echo $fila['titulo']; ?>" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                            <div class="relative bg-white pt-3">
                                <h3 class="text-xs text-gray-700 group-hover:underline group-hover:underline-offset-4">
                                    <?php echo $fila['titulo']; ?>
                                </h3>
                                <p class="mt-2">
                                    <span class="sr-only"> Regular Price </span>
                                    <span class="tracking-wider text-gray-900"> BOB <?php echo number_format($fila['precio'], 2); ?> </span>
                                </p>
                            </div>
                        </a>
                    </li>

                <?php
                }
                ?>

            </ul>
            <div class="py-10">
                <div class="p-6 py-12 bg-picton-blue-600 text-gray-50">
                    <div class="container mx-auto">
                        <div class="flex flex-col lg:flex-row items-center justify-between">
                            <h2 class="text-left text-4xl tracking-tighter font-bold">
                                Obten hasta el 50% de descuento
                            </h2>
                            <div class="space-x-2 text-center py-2 lg:py-0">
                                <span class="block">Además, ¡envío gratuito!</span>
                                <span class=" font-bold text-lg"> Usa el codigo: PUMA2024</span>
                            </div>
                            <ButtonSecondary label="Ir a la Tienda" direccion="/tienda" />

                            <a href="\proyectobolivar\tienda.php" class="inline-flex overflow-hidden text-white bg-picton-blue-900 rounded group">
                                <span class="px-3.5 py-2 text-white bg-picton-blue-500 group-hover:bg-picton-blue-600 flex items-center justify-center">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                                    </svg>
                                </span>
                                <span class="pl-4 pr-5 py-2.5">Ir a la Tienda</span>
                            </a>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <?php
    incluirTemplate('sponsors');
    ?>


</body>


<?php
incluirTemplate('footer');
?>