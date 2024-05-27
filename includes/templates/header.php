<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CLub Bolivar</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "picton-blue": {
                            "50": "#eff9ff",
                            "100": "#dff2ff",
                            "200": "#b8e8ff",
                            "300": "#78d7ff",
                            "400": "#2cc1ff",
                            "500": "#06abf1",
                            "600": "#0089ce",
                            "700": "#006da7",
                            "800": "#025c8a",
                            "900": "#084c72",
                            "950": "#06304b",
                        },
                    }
                }
            }
        }
    </script>
</head>
<style>
    button[data-toggle-navbar][data-is-open="true"] #line-1 {
        transform: rotate(45deg) translateY(0.33rem);
    }

    button[data-toggle-navbar][data-is-open="true"] #line-2 {
        transform: rotate(-45deg) translateY(-0.33rem);
    }
</style>

<body>
    <div data-nav-overlay aria-hidden="true" class="fixed bg-gray-800/40 inset-0 z-30 hidden lg:hidden"></div>
    <header class="fixed left-0 bg-emerald-50 dark:bg-gray-950 top-0 w-full flex items-center h-20 border-b border-b-gray-100 dark:border-b-gray-800 z-40 <?php echo $inicio ? 'inicio' : ''; ?>">
        <nav class="relative mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5 flex gap-x-5 justify-between items-center">
            <div class="flex items-center min-w-max">
                <a href="#" class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                    <span class="relative after:absolute after:inset-0 after:rotate-3 after:border after:border-emerald-600 text-emerald-800 dark:text-white">Club</span>Bolivar
                </a>
            </div>

            <div data-navbar class="absolute top-full translate-y-10 -rotate-12 opacity-0 invisible lg:visible lg:-rotate-0 lg:translate-y-0 lg:opacity-100 left-0 bg-white dark:bg-gray-950 lg:bg-transparent border-b border-gray-200 dark:border-gray-800 py-8 lg:py-0 px-5 sm:px-10 md:px-12 lg:px-0 lg:border-none w-full lg:top-0 lg:relative  lg:flex lg:justify-between duration-300 lg:transition-none ease-linear">
                <ul class="flex flex-col lg:flex-row gap-6 lg:items-center text-gray-800 dark:text-gray-200 lg:w-full lg:justify-center">
                    <li class="">
                        <a href="\proyectoBolivar\index.php" class="relative py-2.5 duration-300 ease-linear hover:text-emerald-600 after:absolute after:w-full after:left-0 after:bottom-0 after:h-px after:rounded-md after:origin-left after:ease-linear after:duration-300 after:scale-x-0 hover:after:scale-100 after:bg-emerald-600">Inicio</a>
                    </li>
                    <li class="">
                        <a href="\proyectoBolivar\sobre-nosotros.php" class="relative py-2.5 duration-300 ease-linear hover:text-emerald-600 after:absolute after:w-full after:left-0 after:bottom-0 after:h-px after:rounded-md after:origin-left after:ease-linear after:duration-300 after:scale-x-0 hover:after:scale-100 after:bg-emerald-600">Sobre Nosotros</a>
                    </li>
                    <li class="">
                        <a href="\proyectoBolivar\tienda.php" class="relative py-2.5 duration-300 ease-linear hover:text-emerald-600 after:absolute after:w-full after:left-0 after:bottom-0 after:h-px after:rounded-md after:origin-left after:ease-linear after:duration-300 after:scale-x-0 hover:after:scale-100 after:bg-emerald-600">Tienda</a>
                    </li>
                    <li class="">
                        <a href="\proyectoBolivar\entradas.php" class="relative py-2.5 duration-300 ease-linear hover:text-emerald-600 after:absolute after:w-full after:left-0 after:bottom-0 after:h-px after:rounded-md after:origin-left after:ease-linear after:duration-300 after:scale-x-0 hover:after:scale-100 after:bg-emerald-600">Entradas</a>
                    </li>
                    <li class="">
                        <a href="\proyectoBolivar\contacto.php" class="relative py-2.5 duration-300 ease-linear hover:text-emerald-600 after:absolute after:w-full after:left-0 after:bottom-0 after:h-px after:rounded-md after:origin-left after:ease-linear after:duration-300 after:scale-x-0 hover:after:scale-100 after:bg-emerald-600">Contacto</a>
                    </li>
                </ul>
                <div class="flex flex-col sm:flex-row sm:items-center gap-4  lg:min-w-max mt-10 lg:mt-0">
                    <div class="hidden lg:flex lg:items-center ">
                        <a href="#" class="relative text-gray-800 dark:text-gray-200 px-1.5">
                            <span class="sr-only">cart</span>
                            <span class="absolute top-0 right-0 bg-emerald-600 w-2 h-2 rounded-full"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>
                        </a>
                    </div>
                    <?php

                    if (isset($_SESSION['login']) && $_SESSION['login']) {
                        echo '<a href="\proyectobolivar\cerrar-sesion.php" class="px-5 py-2.5 rounded-md bg-emerald-600 text-white flex justify-center duration-300 ease-linear hover:bg-red-700">Cerrar Sesión</a>';
                    } else {
                        echo '<a href="login.php" class="px-5 py-2.5 rounded-md text-emerald-800 dark:text-gray-200 underline flex justify-center">
        Iniciar Sesion
    </a>';
                        echo '<a href="registrarse.php" class="px-5 py-2.5 rounded-md bg-emerald-600 text-white flex justify-center duration-300 ease-linear hover:bg-emerald-700">
    Registrarse
</a>';
                    }
                    ?>
                    
                </div>
            </div>
            <div class="flex items-center lg:hidden gap-x-4">
                <div class="flex items-center gap-x-4 lg:hidden">
                    <a href="#" class="relative  text-gray-700 dark:text-gray-300 px-1.5">
                        <span class="sr-only">cart</span>
                        <span class="absolute top-0 right-0 bg-emerald-600 w-2 h-2 rounded-full"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                        </svg>
                    </a>
                    <div class="flex">
                        <button data-toggle-navbar data-is-open="false" aria-label="Toggle navbar" class="outline-none border-l border-l-picton-blue-100 bg-picton-blue-400 pl-3 relative py-3 children:flex">
                            <span id="line-1" aria-hidden="true" class="h-0.5 w-6 rounded bg-gray-200  transition duration-300"></span>
                            <span id="line-2" aria-hidden="true" class="mt-2 h-0.5 w-6 rounded bg-gray-200 transition duration-300"></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <script>
        const btnHumb = document.querySelector("[data-toggle-navbar]")
        const navbar = document.querySelector("[data-navbar]")
        const overlay = document.querySelector("[data-nav-overlay]")
        if (btnHumb && navbar) {
            const toggleBtnAttr = () => {
                const isOpen = btnHumb.getAttribute("data-is-open")
                btnHumb.setAttribute("data-is-open", isOpen === "true" ? "false" : "true")
                if (isOpen === "false") {
                    document.body.classList.toggle("overflow-y-auto")
                    overlay.classList.toggle("hidden")
                } else {
                    document.body.classList.add("overflow-y-auto")
                    overlay.classList.add("hidden")
                }
            }
            btnHumb.addEventListener("click", () => {
                navbar.classList.toggle("invisible")
                navbar.classList.toggle("opacity-0")
                navbar.classList.toggle("translate-y-10")
                navbar.classList.toggle("-rotate-12")
                toggleBtnAttr()
            })

            overlay.addEventListener("click", () => {
                navbar.classList.add("invisible")
                navbar.classList.add("opacity-0")
                navbar.classList.add("translate-y-10")
                navbar.classList.add("-rotate-12")
                toggleBtnAttr()
            })
        }
    </script>