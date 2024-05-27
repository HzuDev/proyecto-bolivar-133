<?php
require '../includes/funciones.php';
incluirTemplate('header');
require '../includes/config/db.php';
$db = conectarDB();

$consulta = "SELECT * FROM ticket ORDER BY id_ticket DESC LIMIT 4";

$resultado = mysqli_query($db, $consulta);
$tickets = [];
while ($ticket = $resultado->fetch_assoc()) {
    $tickets[] = $ticket;
}
$ticket1 = $tickets[0];
$ticket2 = $tickets[1];
$ticket3 = $tickets[2];
$ticket4 = $tickets[3];
?>

<section class="bg-white">
    <div class="pt-24">
        <img src="../public/stadium/stadium.png" alt="stadium" class="h-full w-1/2 mx-auto" />
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-10 p-10 mt-24 h-auto">
        <div class="flex flex-col bg-white hover:shadow-picton-blue-800 hover:shadow-md rounded-lg bg-picton-blue-800/30 border ">
            <div class="p-1 rounded-t-lg bg-picton-blue-300"></div>
            <div class="flex flex-col rounded p-5 lg:p-8">
                <h3 class="text-3xl text-black font-bold"><?php echo $ticket1['tipo_ingreso']; ?></h3>
                <p class="py-1 text-sm">
                    <?php echo $ticket1['descripcion']; ?>
                </p>
                <p class="text-6xl font-bold tracking-tight pt-5"><?php echo $ticket1['precio']; ?> BOB</p>

                <div class="pt-3 flex flex-col gap-2 ">
                    <a href="#_" class="w-2/4 relative inline-flex items-center px-12 py-3 overflow-hidden text-lg font-bold text-picton-blue-600 border-2 border-picton-blue-600 rounded-sm hover:text-white group hover:bg-gray-50">
                        <span class="absolute left-0 block w-full h-0 transition-all bg-picton-blue-600 opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                        <span class="absolute right-0 flex items-center justify-start w-10 h-10 duration-300 transform translate-x-full group-hover:translate-x-0 ease">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </span>
                        <span class="relative">Comprar ahora</span>
                    </a>
                    </button>
                </div>
            </div>
        </div>
        <div class="flex flex-col bg-white hover:shadow-picton-blue-800 hover:shadow-md rounded-lg bg-picton-blue-800/30 border ">
            <div class="p-1 rounded-t-lg bg-picton-blue-300"></div>
            <div class="flex flex-col rounded p-5 lg:p-8">
                <h3 class="text-3xl text-black font-bold"><?php echo $ticket2['tipo_ingreso']; ?></h3>
                <p class="py-1 text-sm">
                    <?php echo $ticket2['descripcion']; ?>
                </p>
                <p class="text-6xl font-bold tracking-tight pt-5"><?php echo $ticket2['precio']; ?> BOB</p>

                <div class="pt-3 flex flex-col gap-2 ">
                    <a href="#_" class="w-2/4 relative inline-flex items-center px-12 py-3 overflow-hidden text-lg font-bold text-picton-blue-600 border-2 border-picton-blue-600 rounded-sm hover:text-white group hover:bg-gray-50">
                        <span class="absolute left-0 block w-full h-0 transition-all bg-picton-blue-600 opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                        <span class="absolute right-0 flex items-center justify-start w-10 h-10 duration-300 transform translate-x-full group-hover:translate-x-0 ease">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </span>
                        <span class="relative">Comprar ahora</span>
                    </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex flex-col bg-white hover:shadow-picton-blue-800 hover:shadow-md rounded-lg bg-picton-blue-800/30 border ">
            <div class="p-1 rounded-t-lg bg-picton-blue-300"></div>
            <div class="flex flex-col rounded p-5 lg:p-8">
                <h3 class="text-3xl text-black font-bold"><?php echo $ticket3['tipo_ingreso']; ?></h3>
                <p class="py-1 text-sm">
                    <?php echo $ticket3['descripcion']; ?>
                </p>
                <p class="text-6xl font-bold tracking-tight pt-5"><?php echo $ticket3['precio']; ?> BOB</p>

                <div class="pt-3 flex flex-col gap-2 ">
                    <a href="#_" class="w-2/4 relative inline-flex items-center px-12 py-3 overflow-hidden text-lg font-bold text-picton-blue-600 border-2 border-picton-blue-600 rounded-sm hover:text-white group hover:bg-gray-50">
                        <span class="absolute left-0 block w-full h-0 transition-all bg-picton-blue-600 opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                        <span class="absolute right-0 flex items-center justify-start w-10 h-10 duration-300 transform translate-x-full group-hover:translate-x-0 ease">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </span>
                        <span class="relative">Comprar ahora</span>
                    </a>
                    </button>
                </div>
            </div>
        </div>

        <div class="flex flex-col bg-white hover:shadow-picton-blue-800 hover:shadow-md rounded-lg bg-picton-blue-800/30 border ">
            <div class="p-1 rounded-t-lg bg-picton-blue-300"></div>
            <div class="flex flex-col rounded p-5 lg:p-8">
                <h3 class="text-3xl text-black font-bold"><?php echo $ticket4['tipo_ingreso']; ?></h3>
                <p class="py-1 text-sm">
                    <?php echo $ticket4['descripcion']; ?>
                </p>
                <p class="text-6xl font-bold tracking-tight pt-5"><?php echo $ticket4['precio']; ?> BOB</p>

                <div class="pt-3 flex flex-col gap-2 ">
                    <a href="#_" class="w-2/4 relative inline-flex items-center px-12 py-3 overflow-hidden text-lg font-bold text-picton-blue-600 border-2 border-picton-blue-600 rounded-sm hover:text-white group hover:bg-gray-50">
                        <span class="absolute left-0 block w-full h-0 transition-all bg-picton-blue-600 opacity-100 group-hover:h-full top-1/2 group-hover:top-0 duration-400 ease"></span>
                        <span class="absolute right-0 flex items-center justify-start w-10 h-10 duration-300 transform translate-x-full group-hover:translate-x-0 ease">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </span>
                        <span class="relative">Comprar ahora</span>
                    </a>
                    </button>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="p-6 bg-picton-blue-900">
    <div class="container p-4 mx-auto text-center">
        <h2 class="text-4xl font-bold text-gray-50 uppercase ">Sponsors</h2>
    </div>
    <div class="container flex flex-wrap justify-center mx-auto dark:text-gray-600">
        <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
            <a href="https://us.puma.com/us/en" target="_blank">
                <img src="../../../proyectoBolivar/public/sponsors/puma-2.0.png" alt="logo puma 2sss" class="fill-current w-28 h-28" />
            </a>
        </div>
        <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
            <a href="https://www.bg.com.bo/personas/" target="_blank">
                <img src="../../../proyectoBolivar/public/sponsors/bg-3.0.png" alt="logo puma" class="fill-current w-28 h-28" />
            </a>
        </div>

        <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
            <a href="https://www.ketal.com.bo/" target="_blank">

                <img src="../../../proyectoBolivar/public/sponsors/KETAL-2023-2.0.png" alt="logo puma" class="fill-current w-28 h-28" />
            </a>
        </div>
        <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
            <a href="https://www.suzuki.com.bo/" target="_blank">

                <img src="../../../proyectoBolivar/public/sponsors/susuki-2.0.png" alt="logo puma" class="fill-current w-28 h-28" />
            </a>
        </div>
        <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
            <a href="https://www.bago.com.bo/" target="_blank">

                <img src="../../../proyectoBolivar/public/sponsors/bago.png" alt="logo puma" class="fill-current w-28 h-28" />
            </a>
        </div>
        <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
            <a href="https://www.cbn.bo/" target="_blank">

                <img src="../../../proyectoBolivar/public/sponsors/Paciera-PNG.png" alt="logo puma" class="fill-current w-28 h-28" />
            </a>
        </div>
        <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
            <a href="https://breick.com.bo/" target="_blank">

                <img src="../../../proyectoBolivar/public/sponsors/2Breick-logo.png" alt="logo puma" class="fill-current w-28 h-28" />
            </a>
        </div>
        <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
            <a href="https://nationalmaglab.org/" target="_blank">

                <img src="../../../proyectoBolivar/public/sponsors/Maglab.png" alt="logo puma" class="fill-current w-28 h-28" />
            </a>
        </div>
        <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
            <a href="https://libelula.bo/" target="_blank">

                <img src="../../../proyectoBolivar/public/sponsors/libelula.png" alt="logo puma" class="fill-current w-28 h-28" />
            </a>
        </div>
        <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
            <a href="https://aguavillasanta.com/" target="_blank">

                <img src="../../../proyectoBolivar/public/sponsors/villa-santa.png" alt="logo puma" class="fill-current w-28 h-28" />
            </a>
        </div>
    </div>
</section>

<?php
incluirTemplate('footer');
?>