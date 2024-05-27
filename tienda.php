<?php
require 'includes/funciones.php';
incluirTemplate('header');
require_once 'includes/config/db.php';
$db = conectarDB();

?>
<section class="pt-24">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
            <div class="grid place-content-center rounded bg-gray-100 p-6 sm:p-8">
                <div class="mx-auto max-w-md text-center lg:text-left">
                    <header>
                        <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Watches</h2>

                        <p class="mt-4 text-gray-500">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas rerum quam amet
                            provident nulla error!
                        </p>
                    </header>

                    <a href="#" class="mt-8 inline-block rounded border border-gray-900 bg-gray-900 px-12 py-3 text-sm font-medium text-white transition hover:shadow focus:outline-none focus:ring">
                        Shop All
                    </a>
                </div>
            </div>

            <div class="lg:col-span-2 lg:py-8">
                <ul class="grid grid-cols-2 gap-4">
                    <li>
                        <a href="#" class="group block">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1598&q=80" alt="" class="aspect-square w-full rounded object-cover" />

                            <div class="mt-3">
                                <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                    Simple Watch
                                </h3>

                                <p class="mt-1 text-sm text-gray-700">$150</p>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="group block">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1598&q=80" alt="" class="aspect-square w-full rounded object-cover" />

                            <div class="mt-3">
                                <h3 class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4">
                                    Simple Watch
                                </h3>

                                <p class="mt-1 text-sm text-gray-700">$150</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="bg-white py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
        <header class="text-left">
            <h2 class="text-xl font-bold text-gray-900 sm:text-4xl">
                Tienda Oficial
            </h2>
            <nav class="flex justify-between my-8">
                <ul class="mt-4 flex flex-wrap gap-4 sm:gap-8">
                    <li>
                        <a href="#" id="ropapuma" class="category text-sm text-gray-700 hover:text-gray-900">
                            Ropa PUMA
                        </a>
                    </li>
                    <li>
                        <a href="#" id="ropacasual" class="category text-sm text-gray-700 hover:text-gray-900">
                            Ropa Casual
                        </a>
                    </li>
                    <li>
                        <a href="#" id="accesorios" class="category text-sm text-gray-700 hover:text-gray-900">
                            Accesorios
                        </a>
                    </li>
                </ul>
                <input type="text" placeholder="Buscar producto..." class="px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
            </nav>
        </header>

    </div>
    <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        <div class="mb-10 md:mb-16">
            <h2 id="productTitle" class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Todos los Productos</h2>

            <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">Aquí puedes encontrar todos nuestros productos disponibles.</p>
        </div>

        <div id="productContainer" class=" grid gap-x-4 gap-y-8 sm:grid-cols-2 md:gap-x-6 lg:grid-cols-3 xl:grid-cols-4">
            <?php
            $categorias = ['ropapuma', 'ropacasual', 'accesorios'];
            foreach ($categorias as $categoria) {
                $consql = "SELECT * FROM $categoria";
                $res = mysqli_query($db, $consql);
                while ($fila = mysqli_fetch_array($res)) {
                    $rutaImagen = "/proyectoBolivar/admin/tienda/$categoria/imagenes/" . $fila['imagen'];
            ?>
                    <li class="list-none">
                        <a href="#" class="group block overflow-hidden relative">
                            <span class="absolute top-0 left-0 w-28 translate-y-4 -translate-x-6 -rotate-45 bg-black text-center text-sm text-white"><?php echo $fila['etiqueta']; ?></span>
                            <img src="<?php echo $rutaImagen; ?>" alt="<?php echo $fila['titulo']; ?>" class="h-[350px] w-full object-cover transition duration-500 group-hover:scale-105 sm:h-[450px]" />
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
            }
            ?>
        </div>
    </div>

</div>
<script>
    document.querySelectorAll('.category').forEach(function(element) {
        element.addEventListener('click', function(e) {
            e.preventDefault();
            loadProducts(e.target.id);
        });
    });

    function loadProducts(category) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'get_products.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (this.status == 200) {
                document.getElementById('productContainer').innerHTML = this.responseText;
            }
        };
        xhr.send('category=' + category);
    }
    var categoryTitles = {
        'ropapuma': 'Productos PUMA',
        'ropacasual': 'Ropa Casual',
        'accesorios': 'Accesorios'
    };

    document.querySelectorAll('.category').forEach(function(element) {
        element.addEventListener('click', function(e) {
            e.preventDefault();
            var category = e.target.id;
            var customTitle = categoryTitles[category] || 'Todos los Productos';
            document.getElementById('productTitle').textContent = customTitle;
            loadProducts(category);
        });
    });
</script>