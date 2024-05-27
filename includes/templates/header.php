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

    /* ubuntu-sans-latin-wght-normal */
    @font-face {
        font-family: 'Ubuntu Sans Variable';
        font-style: normal;
        font-display: swap;
        font-weight: 100 800;
        src: url(https://cdn.jsdelivr.net/fontsource/fonts/ubuntu-sans:vf@latest/latin-wght-normal.woff2) format('woff2-variations');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    body {
        font-family: 'Ubuntu Sans Variable';
    }
</style>

<body>
    <div data-nav-overlay aria-hidden="true" class="fixed bg-gray-800/40 inset-0 z-30 hidden lg:hidden"></div>
    <header class="fixed left-0 bg-picton-blue-950 top-0 w-full flex items-center h-20 border-b border-b-gray-100 dark:border-b-gray-800 z-40 <?php echo $inicio ? 'inicio' : ''; ?>">
        <nav class="relative mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5 flex gap-x-5 justify-between items-center">
            <div class="flex items-center min-w-max">
                <a href="\proyectobolivar\index.php" class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 263 300" fill="none">
                        <g clip-path="url(#clip0_1390_2353)">
                            <path d="M261.858 48.5119L261.515 40.2489L253.281 39.4659C216.827 35.9959 171.798 21.7991 135.762 2.4172L131.272 0.0012207L126.78 2.4172C90.7413 21.7991 45.7106 35.9959 9.26092 39.4659L1.02799 40.2489L0.684991 48.5119C-1.23899 94.8705 -0.558 154.371 21.9618 203.391L22.0058 203.484C46.2866 254.87 92.7903 283.454 127.525 298.386L131.27 299.994L135.015 298.386C169.749 283.453 216.252 254.869 240.534 203.484L240.579 203.391C263.099 154.371 263.789 94.8715 261.859 48.5119" fill="#1367A3"></path>
                            <path d="M132.149 9.14915L131.279 8.68115L130.407 9.14915C93.5314 28.983 47.3907 43.5149 9.98803 47.0759L8.39004 47.2289L8.32404 48.8298C6.90606 83.0366 6.91405 124.489 16.286 163.169L204.285 37.7799C179.485 30.922 154.165 20.9931 132.145 9.14815" fill="white"></path>
                            <path d="M49.3757 232.549C73.4375 262.107 105.22 280.48 130.548 291.367L131.275 291.68L132.001 291.367C165.524 276.958 210.368 249.445 233.64 200.205C248.495 167.861 253.536 130.528 254.647 95.6355L49.3687 232.544L49.3757 232.549Z" fill="white"></path>
                            <path d="M58.4864 233.819C80.6413 258.847 108.455 275.011 131.275 285.016C163.629 270.832 206.045 244.285 228.082 197.653C240.853 169.846 246.175 138.073 247.99 107.422L58.4814 233.811L58.4864 233.819Z" fill="#8DD8F8"></path>
                            <path d="M131.279 15.6143C95.2982 34.6112 51.0636 48.6471 14.2898 52.777C13.1438 83.2478 13.3248 119.072 20.3058 153.136L190.015 39.9371C169.675 33.5132 149.425 25.1972 131.275 15.6123" fill="#8DD8F8"></path>
                            <path d="M28.2329 183.32L48.2579 169.857C49.6359 168.929 50.9149 168.227 52.0929 167.746C53.2739 167.267 54.3779 167.051 55.4099 167.099C56.4419 167.144 57.4039 167.469 58.2939 168.071C59.1859 168.675 60.0349 169.576 60.8409 170.776C61.5589 171.843 62.0529 172.761 62.3289 173.529C62.6039 174.3 62.7259 174.991 62.6979 175.603C62.6689 176.213 62.5179 176.757 62.2499 177.236C61.9789 177.715 61.6569 178.195 61.2849 178.675L61.3529 178.779C63.0139 177.955 64.4719 177.8 65.7249 178.307C66.9759 178.814 68.2269 179.996 69.4769 181.857C70.3899 183.216 70.9609 184.438 71.1869 185.519C71.4159 186.602 71.3799 187.588 71.0839 188.48C70.7869 189.368 70.2729 190.183 69.5419 190.922C68.8099 191.659 67.9429 192.367 66.9399 193.042L44.7859 207.938L28.2329 183.328V183.32ZM41.7509 188.4L54.0659 180.118C54.7119 179.684 55.1209 179.207 55.2849 178.684C55.4509 178.162 55.2949 177.549 54.8229 176.848C54.3349 176.119 53.8189 175.737 53.2719 175.692C52.7269 175.647 52.1299 175.841 51.4819 176.278L39.1659 184.557L41.7509 188.397V188.4ZM47.7649 197.34L60.2369 188.955C60.9879 188.447 61.5139 187.922 61.8129 187.373C62.1129 186.826 62.0199 186.191 61.5309 185.466C60.9669 184.627 60.3669 184.232 59.7339 184.279C59.0999 184.33 58.4029 184.604 57.6519 185.112L45.1799 193.496L47.7649 197.346V197.34Z" fill="white"></path>
                            <path d="M66.8174 169.91C65.6134 168.12 64.8464 166.497 64.5204 165.036C64.1914 163.579 64.2364 162.223 64.6544 160.973C65.0714 159.722 65.8114 158.557 66.8784 157.479C67.9414 156.402 69.2584 155.335 70.8254 154.282L81.9794 146.78C83.5474 145.727 85.0304 144.911 86.4304 144.331C87.8314 143.752 89.1894 143.504 90.5064 143.59C91.8214 143.676 93.0934 144.146 94.3204 144.999C95.5464 145.855 96.7624 147.176 97.9664 148.966L102.904 156.312C104.124 158.125 104.894 159.755 105.213 161.203C105.535 162.648 105.486 163.997 105.068 165.25C104.65 166.502 103.91 167.668 102.843 168.744C101.779 169.822 100.464 170.89 98.8964 171.942L87.7404 179.444C86.1744 180.498 84.6904 181.313 83.2904 181.892C81.8904 182.473 80.5324 182.719 79.2144 182.632C77.8994 182.545 76.6304 182.083 75.4124 181.241C74.1934 180.397 72.9744 179.07 71.7544 177.256L66.8214 169.886L66.8174 169.91ZM77.3234 170.11C77.9174 170.994 78.4804 171.718 79.0114 172.283C79.5434 172.85 80.0834 173.224 80.6354 173.413C81.1864 173.602 81.7854 173.611 82.4284 173.441C83.0744 173.271 83.8034 172.913 84.6164 172.366L93.5164 166.381C94.3314 165.833 94.9384 165.293 95.3394 164.76C95.7394 164.229 95.9564 163.671 95.9904 163.089C96.0234 162.507 95.8784 161.865 95.5564 161.157C95.2344 160.453 94.7764 159.659 94.1814 158.774L92.3974 156.123C91.8794 155.353 91.3604 154.705 90.8424 154.183C90.3244 153.659 89.7624 153.287 89.1594 153.067C88.5554 152.845 87.8954 152.813 87.1794 152.965C86.4634 153.119 85.6444 153.501 84.7254 154.12L76.5794 159.599C75.6604 160.217 74.9944 160.831 74.5814 161.435C74.1704 162.041 73.9534 162.665 73.9294 163.306C73.9054 163.949 74.0384 164.61 74.3264 165.287C74.6164 165.964 75.0204 166.689 75.5364 167.459L77.3234 170.109V170.11Z" fill="white"></path>
                            <path d="M96.3584 137.51L103.319 132.83L115.619 151.12L131.249 140.61L135.499 146.94L112.909 162.13L96.3584 137.51Z" fill="white"></path>
                            <path d="M138.827 144.712L145.784 140.034L129.231 115.418L122.274 120.096L138.827 144.712Z" fill="white"></path>
                            <path d="M132.109 113.471L139.729 108.351L160.899 120.681L157.459 96.4215L165.079 91.3015L169.439 124.121L160.859 129.891L132.109 113.471Z" fill="white"></path>
                            <path d="M174.759 84.7907L183.816 78.7007L212.84 94.9337L205.1 100.139L200.011 97.2397L185.91 106.721L186.8 112.444L179.028 117.669L174.758 84.7987L174.759 84.7907ZM184.949 99.6677L193.849 93.6847L183.118 87.4707L184.948 99.6677H184.949Z" fill="white"></path>
                            <path d="M198.769 68.6498L219.764 54.5328C221.101 53.6348 222.326 53.0658 223.44 52.8268C224.553 52.5898 225.581 52.6148 226.518 52.9048C227.455 53.1948 228.331 53.7178 229.142 54.4738C229.955 55.2288 230.732 56.1598 231.479 57.2708L232.531 58.8348C233.08 59.6518 233.523 60.4218 233.86 61.1498C234.2 61.8788 234.395 62.5858 234.448 63.2748C234.501 63.9628 234.388 64.6538 234.114 65.3498C233.839 66.0448 233.371 66.7628 232.716 67.4988L232.763 67.5668C233.36 67.3298 233.953 67.1528 234.543 67.0368C235.131 66.9198 235.736 66.9488 236.356 67.1258C236.975 67.3018 237.601 67.6468 238.232 68.1588C238.866 68.6718 239.526 69.4378 240.211 70.4578L243.024 74.6408L236.069 79.3188L234.079 76.3598C233.211 75.0668 232.405 74.3098 231.662 74.0848C230.92 73.8598 230.005 74.1128 228.918 74.8428L217.982 82.1968L222.28 88.5888L215.323 93.2668L198.763 68.6498H198.769ZM213.859 76.0778L225.359 68.3448C226.298 67.7138 226.822 67.0578 226.924 66.3788C227.03 65.6998 226.784 64.9188 226.19 64.0338L225.643 63.2188C224.911 62.1308 224.183 61.6008 223.457 61.6268C222.731 61.6538 221.814 62.0398 220.707 62.7838L209.834 70.0958L213.864 76.0778H213.859Z" fill="white"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_1390_2353">
                                <rect width="262.55" height="300" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>

            <div data-navbar class="absolute top-full translate-y-10 -rotate-12 opacity-0 invisible lg:visible lg:-rotate-0 lg:translate-y-0 lg:opacity-100 left-0 bg-picton-blue-950 lg:bg-transparent border-b border-gray-200 dark:border-gray-800 py-8 lg:py-0 px-5 sm:px-10 md:px-12 lg:px-0 lg:border-none w-full lg:top-0 lg:relative  lg:flex lg:justify-between duration-300 lg:transition-none ease-linear">
                <ul class="flex flex-col lg:flex-row gap-6 lg:items-center text-gray-800 dark:text-gray-200 lg:w-full lg:justify-center">
                    <li class="">
                        <a href="\proyectoBolivar\index.php" class="relative py-2.5 duration-300 ease-linear hover:text-picton-blue-600 after:absolute after:w-full after:left-0 after:bottom-0 after:h-px after:rounded-md after:origin-left after:ease-linear after:duration-300 after:scale-x-0 hover:after:scale-100 after:bg-picton-blue-600">Inicio</a>
                    </li>
                    <li class="">
                        <a href="\proyectoBolivar\sobre-nosotros.php" class="relative py-2.5 duration-300 ease-linear hover:text-picton-blue-600 after:absolute after:w-full after:left-0 after:bottom-0 after:h-px after:rounded-md after:origin-left after:ease-linear after:duration-300 after:scale-x-0 hover:after:scale-100 after:bg-picton-blue-600">Sobre Nosotros</a>
                    </li>
                    <li class="">
                        <a href="\proyectoBolivar\tienda.php" class="relative py-2.5 duration-300 ease-linear hover:text-picton-blue-600 after:absolute after:w-full after:left-0 after:bottom-0 after:h-px after:rounded-md after:origin-left after:ease-linear after:duration-300 after:scale-x-0 hover:after:scale-100 after:bg-picton-blue-600">Tienda</a>
                    </li>
                    <li class="">
                        <a href="\proyectoBolivar\entradas.php" class="relative py-2.5 duration-300 ease-linear hover:text-picton-blue-600 after:absolute after:w-full after:left-0 after:bottom-0 after:h-px after:rounded-md after:origin-left after:ease-linear after:duration-300 after:scale-x-0 hover:after:scale-100 after:bg-picton-blue-600">Entradas</a>
                    </li>
                    <li class="">
                        <a href="\proyectoBolivar\contacto.php" class="relative py-2.5 duration-300 ease-linear hover:text-picton-blue-600 after:absolute after:w-full after:left-0 after:bottom-0 after:h-px after:rounded-md after:origin-left after:ease-linear after:duration-300 after:scale-x-0 hover:after:scale-100 after:bg-picton-blue-600">Contacto</a>
                    </li>
                </ul>
                <div class="flex flex-col sm:flex-row sm:items-center gap-4  lg:min-w-max mt-10 lg:mt-0">
                    <div class="hidden lg:flex lg:items-center ">
                        <a href="#" class="relative text-gray-800 dark:text-gray-200 px-1.5">
                            <span class="sr-only">cart</span>
                            <span class="absolute top-0 right-0 bg-picton-blue-600 w-2 h-2 rounded-full"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                            </svg>
                        </a>
                    </div>
                    <?php

                    if (isset($_SESSION['login']) && $_SESSION['login']) {
                        echo '<a href="\proyectobolivar\cerrar-sesion.php" class="px-5 py-2.5 rounded-md bg-picton-blue-600 text-white flex justify-center duration-300 ease-linear hover:bg-red-700">Cerrar Sesión</a>';

                        // Si el usuario es un administrador, muestra la opción de administrador
                        if ($_SESSION['rol'] == 'admin') {
                            echo '<a href="\proyectobolivar\admin\index.php" class="px-5 py-2.5 rounded-md bg-picton-blue-600 text-white flex justify-center duration-300 ease-linear hover:bg-picton-blue-700">Administrador</a>';
                        }
                    } else {
                        echo '<a href="login.php" class="px-5 py-2.5 rounded-md text-picton-blue-800 dark:text-gray-200 underline flex justify-center">
    Iniciar Sesion
</a>';
                        echo '<a href="registrarse.php" class="px-5 py-2.5 rounded-md bg-picton-blue-600 text-white flex justify-center duration-300 ease-linear hover:bg-picton-blue-700">
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
                        <button data-toggle-navbar data-is-open="false" aria-label="Toggle navbar" class="outline-none border-l border-l-picton-blue-100  pl-3 relative py-3 children:flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                                <path fill="#ffffff" d="M3 18v-2h18v2zm0-5v-2h18v2zm0-5V6h18v2z" />
                            </svg>
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