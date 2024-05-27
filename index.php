<?php

require 'includes/funciones.php';
incluirTemplate('header');
require_once 'includes/config/db.php';
$db = conectarDB();

?>
<style>
    .arrow {
        width: 150px;
        height: 70px;
        position: relative;
        background-image: url(https://www.youwenliang.com/Codepen/oval.svg);
        background-size: 46px 46px;
        background-repeat: no-repeat;
        background-position: center top;
        font-size: 13px;
        font-family: 'Fira Sans', sans-serif;
        color: #fff;
        text-align: center;
        line-height: 120px;
    }

    .arrow:before {
        content: '';
        width: 46px;
        height: 46px;
        background-image: url(https://www.youwenliang.com/Codepen/arrow.svg);
        background-position: center 8px;
        background-repeat: no-repeat;
        display: block;
        position: absolute;
        top: 0px;
        left: 0px;
        right: 0px;
        margin: auto;
        animation: move 2.5s infinite ease-out;
        opacity: 0;
    }

    .arrow:after {
        content: '';
        width: 46px;
        height: 46px;
        background-image: url(https://www.youwenliang.com/Codepen/arrow.svg);
        background-position: center 8px;
        background-repeat: no-repeat;
        display: block;
        position: absolute;
        top: 0px;
        left: 0px;
        right: 0px;
        margin: auto;
        animation: move 2.5s infinite ease-out .75s;
        opacity: 0;
    }

    @keyframes move {
        0% {
            opacity: 0;
            background-position: center 8px;
        }

        24% {
            opacity: 1;
            background-position: center 17px;
        }

        48% {
            opacity: 0;
            background-position: center 20px;
        }
    }

    #productModal {
        z-index: 1000;
    }
</style>

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
                            <p class="text-xl text-gray-700 dark:text-gray-300">Compra ahora tu polera y únete a las filas celestes con tu entrada para apoyar a la AKD!</p>


                            <div class="flex space-x-4">
                                <a class="inline-block rounded bg-picton-blue-700 px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-indigo-500" href="\proyectobolivar\tienda.php">
                                    Comprar Ahora
                                </a>
                                <a class="inline-block rounded border border-current px-8 py-3 text-sm font-medium text-picton-blue-50 transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:text-indigo-500" href="\proyectobolivar\entradas.php">
                                    Comprar Entradas
                                </a>
                            </div>
                        </div>

                        <div class="hidden relative md:block lg:w-7/12 ">
                            <div aria-hidden="true" class="absolute inset-0 m-auto w-[30rem] h-[30rem] rounded-full bg-picton-blue-50">

                            </div>
                            <?php
                            $consql = "SELECT * FROM ropapuma WHERE prod_destacado = 1 ORDER BY codigo DESC LIMIT 1";
                            $res = mysqli_query($db, $consql);
                            $fila = mysqli_fetch_array($res);
                            ?>
                            <div class="flex items-center justify-center">

                                <img src="/proyectoBolivar/admin/tienda/ropapuma/imagenes/<?php echo $fila['imagen']; ?>" class="relative border-lg" height="350" width="350" alt="<?php echo $fila['titulo']; ?>">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="flex justify-center items-center absolute bottom-8 w-full">
                <div class="arrow">Ver más</div>
            </div>
        </div>
    </section>


    <section class="pt-10">
        <div class="bg-white py-6 sm:py-8 lg:py-12">
            <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
                <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
                    <div class="flex items-center gap-12">
                        <h3 class="text-2xl font-bold text-gray-800 lg:text-5xl">
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

                    <a href="https://clubbolivar.com/el-club-bolivar-renueva-con-el-banco-ganadero/" class="group relative flex h-48 items-end overflow-hidden rounded-lg bg-gray-100 shadow-lg md:h-80" target="_blank">
                        <img src="https://clubbolivar.com/wp-content/uploads/2024/05/JORG0701-2-min-640x427.jpg" loading="lazy" alt="Viacha Selecciones" class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />

                        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-gray-800 via-transparent to-transparent opacity-50"></div>

                        <div class="relative ml-4 mb-3 inline-block bg-black bg-opacity-50 rounded px-2">
                            <span class="text-sm text-white md:text-lg">
                                EL CLUB BOLÍVAR RENUEVA CON EL BANCO GANADERO

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
            <h2 class="text-center font-bold text-5xl mb-10">
                Próximos Partidos
            </h2>
            <div class="grid sm:grid-cols-2 text-sm font-medium text-gray-500 gap-x-2 gap-y-12 lg:gap-y-16 text-balance">
                <div class="border-4 rounded-lg border-picton-blue-900 bg-gradient-to-t from-picton-blue-800 via-picton-blue-600 to-picton-blue-500 p-5">
                    <div class="flex flex-col justify-between px-4">
                        <div class="text-gray-100 font-bold">
                            <p class="text-2xl ">
                                <?php echo $partido1['titulo']; ?>
                            </p>
                            <p class="mt-2">
                                <?php echo $partido1['descripcion']; ?>
                            </p>
                            <div class="font-semibold">

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

                                <div class=" pt-4 flex justify-around		text-xl font-bold text-picton-blue-100">
                                    <p><?php echo $partido1['equipoUno']; ?></p>
                                    <p><?php echo $partido1['equipoDos']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 mt-4 overflow-hidden flex flex-row  items-center">
                        <img src="/proyectoBolivar/admin/calendario/img/<?php echo $partido1['equipoImagenUno']; ?>" alt="equipo local " class="w-14 h-14 mx-auto rounded-2xl" />
                        <span class="font-bold text-picton-blue-100">VS</span>
                        <img src="/proyectoBolivar/admin/calendario/img/<?php echo $partido1['equipoImagenDos']; ?>" alt="equipo visitante" class="w-14 h-14 mx-auto rounded-2xl" />
                    </div>
                </div>
                <div class="border-4 rounded-lg border-picton-blue-900 bg-gradient-to-t from-picton-blue-800 via-picton-blue-600 to-picton-blue-500 p-5">
                    <div class="flex flex-col justify-between px-4">
                        <div class="text-gray-100 font-bold">
                            <p class="text-2xl ">
                                <?php echo $partido2['titulo']; ?>
                            </p>
                            <p class="mt-2">
                                <?php echo $partido2['descripcion']; ?>
                            </p>
                            <div class="font-semibold">

                                <p>
                                    Hora: <span class="font-light"> <?php echo $partido2['hora']; ?></span>
                                </p>
                                <p>
                                    Estadio:
                                    <span class="font-light"> <?php echo $partido2['lugar']; ?></span>
                                </p>
                                <p>
                                    Fecha: <span class="font-light"> <?php echo $partido2['fecha']; ?></span>
                                </p>
                                <div class="flex justify-around	text-xl font-bold text-picton-blue-100 pt-4">
                                    <p><?php echo $partido2['equipoUno']; ?></p>
                                    <p><?php echo $partido2['equipoDos']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 mt-4 overflow-hidden  flex flex-row  items-center">
                        <img src="/proyectoBolivar/admin/calendario/img/<?php echo $partido2['equipoImagenUno']; ?>" alt="equipo local " class="w-14 h-14 mx-auto rounded-2xl" />
                        <span class="font-bold text-picton-blue-100">VS</span>
                        <img src="/proyectoBolivar/admin/calendario/img/<?php echo $partido2['equipoImagenDos']; ?>" alt="equipo visitante" class="w-14 h-14 mx-auto rounded-2xl" />
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center">
            <a class="inline-block rounded bg-picton-blue-700 px-8 py-3 text-sm font-medium text-white transition hover:scale-110 hover:shadow-xl focus:outline-none focus:ring active:bg-indigo-500" href="\proyectobolivar\entradas.php">
                Comprar Ahora
            </a>
        </div>





    </section>



    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header class="text-center">
                <h2 class="text-base sm:text-xl lg:text-2xl xl:text-3xl font-bold text-gray-900">Productos Destacados</h2>
                <p class="mx-auto mt-4 max-w-md text-sm sm:text-base lg:text-lg xl:text-xl text-gray-500">
                    Descubre nuestra selección exclusiva de indumentaria oficial del Club Bolívar. Cada pieza está diseñada con <strong>materiales de primera calidad</strong> y un estilo que captura la <strong>esencia del equipo</strong>. Aprovecha nuestras <strong>ofertas especiales</strong> y muestra tu apoyo al club con orgullo.
                </p>
            </header>

            <ul class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <?php
                $consql = "SELECT * FROM ropapuma WHERE prod_destacado = 1 LIMIT 4";
                $res = mysqli_query($db, $consql);
                while ($fila = mysqli_fetch_array($res)) {
                ?>
                    <li>
                        <a href="javascript:void(0)" onclick="showModal(<?php echo $fila['codigo']; ?>)" class="group block overflow-hidden relative">
                            <span class="absolute top-0 left-0 w-28 translate-y-4 -translate-x-6 -rotate-45 bg-black text-center text-sm text-white"><?php echo $fila['etiqueta']; ?></span>
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



            <!-- Modal  -->
            <section id="productModal" class="text-gray-600 body-font overflow-hidden fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
                <div class="container mx-auto">
                    <div class="bg-white rounded-lg shadow-lg lg:w-4/5 mx-auto flex flex-wrap p-5">
                        <div class="lg:w-1/2 w-full lg:pr-10 lg:py-6 mb-6 lg:mb-0">
                            <h2 class="text-sm title-font text-gray-500 tracking-widest" id="modalBrand">Nombre Del Producto</h2>
                            <h1 class="text-gray-900 text-3xl title-font font-medium mb-4" id="modalTitle">Product Title</h1>
                            <div class="flex mb-4">
                                <a class="flex-grow text-picton-blue-500 border-b-2 border-picton-blue-500 py-2 text-lg px-1">Descripción General</a>
                            </div>
                            <!-- <p class="leading-relaxed mb-4" id="modalDescription">Product description goes here.</p> -->
                            <div class="flex border-t border-gray-200 py-2">
                                <span class="text-gray-500">Etiqueta</span>
                                <span class="ml-auto text-gray-900" id="modalEtiqueta">Etiqueta Value</span>
                            </div>
                            <div class="flex border-t border-gray-200 py-2">
                                <span class="text-gray-500">Talla</span>
                                <span class="ml-auto text-gray-900" id="modalTalla">Talla Value</span>
                            </div>
                            <div class="flex border-t border-gray-200 py-2">
                                <span class="text-gray-500">Color</span>
                                <span class="ml-auto text-gray-900" id="modalColor">Color Value</span>
                            </div>
                            <div class="flex border-t border-gray-200 py-2">
                                <span class="text-gray-500">Material</span>
                                <span class="ml-auto text-gray-900" id="modalMaterial">Material Value</span>
                            </div>
                            <div class="flex border-t border-gray-200 py-2">
                                <span class="text-gray-500">Estado</span>
                                <span class="ml-auto text-gray-900" id="modalEstado">Estado Value</span>
                            </div>
                            <div class="flex border-t border-b mb-6 border-gray-200 py-2">
                                <span class="text-gray-500">Precio</span>
                                <span class="ml-auto text-gray-900" id="modalPrice">Price Value</span>
                            </div>
                            <div class="flex">
                                <button class="flex ml-auto text-white bg-picton-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-picton-blue-600 rounded" onclick="hideModal()">Cerrar</button>
                            </div>
                        </div>
                        <img id="modalImage" alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://dummyimage.com/400x400">
                    </div>
                </div>
            </section>



            <!-- Fin Modal -->
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
<script>
    function showModal(productId) {
        fetch(`/proyectoBolivar/admin/tienda/ropapuma/get-product-details.php?id=${productId}`)
            .then(response => response.json())
            .then(data => {
                console.log(data);

                if (data.error) {
                    alert(data.error);
                    return;
                }

                const product = data.data;
                if (!product) {
                    alert('Product not found');
                    return;
                }

                document.getElementById('modalTitle').textContent = product.titulo;
                document.getElementById('modalEtiqueta').textContent = product.etiqueta;
                document.getElementById('modalTalla').textContent = product.talla;
                document.getElementById('modalColor').textContent = product.color;
                document.getElementById('modalMaterial').textContent = product.material;
                document.getElementById('modalEstado').textContent = product.estado;
                const precio = parseFloat(product.precio);
                if (!isNaN(precio)) {
                    document.getElementById('modalPrice').textContent = `BOB ${precio.toFixed(2)}`;
                } else {
                    document.getElementById('modalPrice').textContent = 'Not available';
                }
                document.getElementById('modalImage').src = `/proyectoBolivar/admin/tienda/ropapuma/imagenes/${product.imagen}`;
                document.getElementById('productModal').classList.remove('hidden');
            })
            .catch(error => console.error('Error fetching product details:', error));
    }

    function hideModal() {
        document.getElementById('productModal').classList.add('hidden');
    }
</script>



<!-- etiqueta, titulo, talla , color, material, precio, imagen, estado -->


<?php
incluirTemplate('footer');
?>