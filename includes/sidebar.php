<style>
    button[data-toggle-sidebar][data-is-open="true"] #line-1 {
        transform: translateY(0.375rem) rotate(40deg);
    }

    button[data-toggle-sidebar][data-is-open="true"] #line-2 {
        transform: scaleX(0);
        opacity: 0;
    }

    button[data-toggle-sidebar][data-is-open="true"] #line-3 {
        transform: translateY(-0.375rem) rotate(-40deg);
    }
</style>
<aside data-sidebar class="fixed absolute h-[100dvh] overflow-hidden z-30 w-11/12 max-w-[18rem] md:w-72 transition-all -translate-x-full lg:-translate-x-0 rounded-r-2xl bg-white dark:bg-gray-950 shadow-lg shadow-gray-200/40 dark:shadow-gray-800/60 flex flex-col justify-between px-4 lg:transition-[width] ease-linear ">
    <nav class="h-full pt-28" data-side-navigation>
        <ul class="text-gray-700 dark:text-gray-300 space-y-2">
            <li>
                <a href="/proyectobolivar/admin/calendario/listar-calendario.php" data-nav-item class="flex items-center gap-x-4 px-3 py-2.5">
                    <span class="min-w-max inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                            <path fill="#ffffff" d="M5 22q-.825 0-1.412-.587T3 20V6q0-.825.588-1.412T5 4h1V3q0-.425.288-.712T7 2t.713.288T8 3v1h8V3q0-.425.288-.712T17 2t.713.288T18 3v1h1q.825 0 1.413.588T21 6v14q0 .825-.587 1.413T19 22zm0-2h14V10H5zm7-6q-.425 0-.712-.288T11 13t.288-.712T12 12t.713.288T13 13t-.288.713T12 14m-4 0q-.425 0-.712-.288T7 13t.288-.712T8 12t.713.288T9 13t-.288.713T8 14m8 0q-.425 0-.712-.288T15 13t.288-.712T16 12t.713.288T17 13t-.288.713T16 14m-4 4q-.425 0-.712-.288T11 17t.288-.712T12 16t.713.288T13 17t-.288.713T12 18m-4 0q-.425 0-.712-.288T7 17t.288-.712T8 16t.713.288T9 17t-.288.713T8 18m8 0q-.425 0-.712-.288T15 17t.288-.712T16 16t.713.288T17 17t-.288.713T16 18" />
                        </svg>
                    </span>
                    <span data-item-text class="inline-flex ease-linear transition-colors duration-300">
                        Calendario
                    </span>
                </a>
            </li>
            <li>
                <a href="/proyectobolivar/admin/ticket/listar-ticket.php" data-nav-item class="flex items-center gap-x-4 px-3 py-2.5">
                    <span class="min-w-max inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 512 512">
                            <path fill="#ffffff" d="m426.24 127.72l-10.94 10.94a29.67 29.67 0 0 1-42-42l10.94-10.94L314.52 16l-88 88l-4 12.09l-12.09 4L16 314.52l69.76 69.76l10.94-10.94a29.67 29.67 0 0 1 42 42l-10.94 10.94L197.48 496l194.4-194.4l4-12.09l12.09-4l88-88Zm-208.56 5.43l21.87-21.87l33 33l-21.88 21.87Zm43 43l21.88-21.88l32.52 32.52l-21.88 21.88Zm42.56 42.56l21.88-21.88l32.52 32.52l-21.84 21.93Zm75.57 75.56l-33-33l21.87-21.88l33 33Z" />
                        </svg>
                    </span>
                    <span data-item-text class="inline-flex ease-linear transition-colors duration-300">
                        Entradas
                    </span>
                </a>
            </li>
            <li>
                <a href="/proyectobolivar/admin/tienda/ropapuma/listar-ropa-puma.php" data-nav-item class="flex items-center gap-x-4 px-3 py-2.5">
                    <span class="min-w-max inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                            <path fill="#ffffff" d="M23.845 3.008c-.417-.533-1.146-.106-1.467.08c-2.284 1.346-2.621 3.716-3.417 5.077c-.626 1.09-1.652 1.89-2.58 1.952c-.686.049-1.43-.084-2.168-.405c-1.807-.781-2.78-1.792-3.017-1.97c-.487-.37-4.23-4.015-7.28-4.164c0 0-.372-.75-.465-.763c-.222-.025-.45.451-.616.501c-.15.053-.413-.512-.565-.487c-.153.02-.302.586-.6.877c-.22.213-.486.2-.637.463c-.052.096-.034.265-.093.42c-.127.32-.551.354-.555.697c0 .381.357.454.669.72c.248.212.265.362.554.461c.258.088.632-.187.964-.088c.277.081.543.14.602.423c.054.256 0 .658-.34.613c-.112-.015-.598-.174-1.198-.11c-.725.077-1.553.309-1.634 1.11c-.041.447.514.97 1.055.866c.371-.071.196-.506.399-.716c.267-.27 1.772.944 3.172.944c.593 0 1.031-.15 1.467-.605c.04-.029.093-.102.155-.11a.6.6 0 0 1 .195.088c1.131.897 1.984 2.7 6.13 2.721c.582.007 1.25.279 1.796.777c.48.433.764 1.125 1.037 1.825c.418 1.053 1.161 2.069 2.292 3.203c.06.068.99.78 1.06.833c.012.01.084.167.053.255c-.02.69-.123 2.67 1.365 2.753c.366.02.275-.231.275-.41c-.005-.341-.065-.685.113-1.04c.253-.478-.526-.709-.509-1.756c.019-.784-.645-.651-.984-1.25c-.19-.343-.368-.532-.35-.946c.073-2.38-.517-3.948-.805-4.327c-.227-.294-.423-.403-.207-.54c1.24-.815 1.525-1.574 1.525-1.574c.66-1.541 1.256-2.945 2.075-3.57c.166-.12.589-.44.852-.56c.763-.362 1.173-.578 1.388-.788c.356-.337.635-1.053.294-1.48" />
                        </svg>
                    </span>
                    <span data-item-text class="inline-flex ease-linear transition-colors duration-300">
                        Ropa Puma
                    </span>
                </a>
            </li>
            <li>
                <a href="/proyectobolivar/admin/tienda/ropacasual/listar-ropa-casual.php" data-nav-item class="flex items-center gap-x-4 px-3 py-2.5">
                    <span class="min-w-max inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 640 512">
                            <path fill="#ffffff" d="M211.8 0c7.8 0 14.3 5.7 16.7 13.2C240.8 51.9 277.1 80 320 80s79.2-28.1 91.5-66.8C413.9 5.7 420.4 0 428.2 0h12.6c22.5 0 44.2 7.9 61.5 22.3l126.2 105.1c6.6 5.5 10.7 13.5 11.4 22.1s-2.1 17.1-7.8 23.6l-56 64c-11.4 13.1-31.2 14.6-44.6 3.5L480 197.7V448c0 35.3-28.7 64-64 64H224c-35.3 0-64-28.7-64-64V197.7l-51.5 42.9c-13.3 11.1-33.1 9.6-44.6-3.5l-56-64c-5.7-6.5-8.5-15-7.8-23.6s4.8-16.6 11.4-22.1L137.7 22.3C155 7.9 176.7 0 199.2 0z" />
                        </svg>
                    </span>
                    <span data-item-text class="inline-flex ease-linear transition-colors duration-300">
                        Ropa Casual
                    </span>
                </a>
            </li>
            <li>
                <a href="/proyectobolivar/admin/tienda/accesorios/listar-accesorios.php" data-nav-item class="flex items-center gap-x-4 px-3 py-2.5">
                    <span class="min-w-max inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 256 256">
                            <path fill="#ffffff" d="m239.89 198.12l-14.26-120a16 16 0 0 0-16-14.12H176a48 48 0 0 0-96 0H46.33a16 16 0 0 0-16 14.12l-14.26 120A16 16 0 0 0 20 210.6a16.13 16.13 0 0 0 12 5.4h191.92a16.13 16.13 0 0 0 12.08-5.4a16 16 0 0 0 3.89-12.48M128 32a32 32 0 0 1 32 32H96a32 32 0 0 1 32-32" />
                        </svg>
                    </span>
                    <span data-item-text class="inline-flex ease-linear transition-colors duration-300">
                        Accesorios
                    </span>
                </a>
            </li>
            <li>
                <a href="/proyectobolivar/admin/usuario/listar-usuarios.php" data-nav-item class="flex items-center gap-x-4 px-3 py-2.5">
                    <span class="min-w-max inline-flex">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 256 256">
                            <path fill="#ffffff" d="M172 120a44 44 0 1 1-44-44a44 44 0 0 1 44 44m52-72v160a16 16 0 0 1-16 16H48a16 16 0 0 1-16-16V48a16 16 0 0 1 16-16h160a16 16 0 0 1 16 16m-16 160V48H48v160h3.67a80.6 80.6 0 0 1 26.07-38.25q3.08-2.48 6.36-4.62a4 4 0 0 1 4.81.33a59.82 59.82 0 0 0 78.18 0a4 4 0 0 1 4.81-.33q3.28 2.15 6.36 4.62A80.6 80.6 0 0 1 204.33 208z" />
                        </svg>
                    </span>
                    <span data-item-text class="inline-flex ease-linear transition-colors duration-300">
                        Usuarios
                    </span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="min-h-max py-2 hidden lg:flex justify-end bg-transparent">
        <button data-toggle-sidebar-size class="outline-none bg-gray-100 dark:bg-gray-900 rounded-md text-gray-800 dark:text-gray-200 border border-gray-200 dark:border-gray-800 ease-linear transition-transform w-8 h-8 sm:w-9 sm:h-9 flex items-center justify-center">
            <span class="sr-only">toggle sidebar</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
            </svg>
        </button>
    </div>
</aside>
<main>
    <div class="flex lg:hidden fixed right-2 top-2 p-4">
        <button data-toggle-sidebar class="p-3 rounded-full bg-blue-600 dark:bg-blue-500 outline-none w-12 aspect-square flex flex-col relative justify-center items-center">
            <span class="sr-only">
                toggle sidebar
            </span>
            <span id="line-1" class="w-6 h-0.5 rounded-full bg-gray-300 transition-transform duration-300 ease-linear"></span>
            <span id="line-2" class="w-6 origin-center mt-1 h-0.5 rounded-full bg-gray-300 transition-all duration-300 ease-linear"></span>
            <span id="line-3" class="w-6 mt-1 h-0.5 rounded-full bg-gray-300 transition-all duration-300 ease-linear"></span>
        </button>
    </div>
</main>
<script>
    const sidebar = document.querySelector("[data-sidebar]");
    if (sidebar) {
        const toggleSize = sidebar.querySelector("[data-toggle-sidebar-size]"),
            sidenavigation = sidebar.querySelector("[data-side-navigation]"),
            side_nav_items = sidenavigation.querySelectorAll("[data-nav-item]"),
            logobox = sidebar.querySelector("[data-logo-box]"),
            toggleSidebar = document.querySelector("[data-toggle-sidebar]");

        // Establece el sidebar como cerrado por defecto
        sidebar.classList.add("-translate-x-full");
        toggleSidebar.setAttribute("data-is-open", "false");

        if (toggleSize) {
            toggleSize.addEventListener("click", () => {
                sidebar.classList.toggle("lg:w-20");
                toggleSize.classList.toggle("rotate-180");
                side_nav_items.forEach(side_nav_item => {
                    side_nav_item.querySelector("[data-item-text]").classList.toggle("opacity-0");
                });
                if (logobox) {
                    logobox.querySelector("[data-text]").classList.toggle("invisible");
                }
            });
        }

        if (toggleSidebar) {
            const toggleBtnAttr = () => {
                const isOpen = toggleSidebar.getAttribute("data-is-open");
                toggleSidebar.setAttribute("data-is-open", isOpen === "true" ? "false" : "true");
                if (isOpen === "false") {
                    document.body.classList.toggle("overflow-y-auto");
                } else {
                    document.body.classList.add("overflow-y-auto");
                }
            }
            toggleSidebar.addEventListener("click", () => {
                sidebar.classList.toggle("-translate-x-full");
                toggleBtnAttr();
            });
        }
    }

    // document.addEventListener("DOMContentLoaded", () => {
    //     const navItems = document.querySelectorAll("[data-nav-item]");
    //     const currentPath = window.location.pathname;

    //     navItems.forEach(item => {
    //         const itemPath = item.getAttribute("href");
    //         if (currentPath.includes(itemPath)) {
    //             item.classList.add("text-gray-800", "dark:text-white", "bg-gray-200", "dark:bg-gray-800", "rounded-md");
    //         } else {
    //             item.classList.remove("text-gray-800", "dark:text-white", "bg-gray-200", "dark:bg-gray-800", "rounded-md");
    //         }
    //     });
    // });
    document.addEventListener("DOMContentLoaded", () => {
    const navItems = document.querySelectorAll("[data-nav-item]");
    const currentPath = window.location.pathname;

    navItems.forEach(item => {
        const itemPath = item.getAttribute("href");
        if (currentPath.includes(itemPath)) {
            item.classList.add("text-gray-800", "dark:text-white", "bg-gray-200", "dark:bg-gray-800", "rounded-md");
        } else {
            item.classList.remove("text-gray-800", "dark:text-white", "bg-gray-200", "dark:bg-gray-800", "rounded-md");
        }
    });

    // Establecer el sidebar como cerrado al cargar una nueva página
    const sidebar = document.querySelector("[data-sidebar]");
    const toggleSidebar = document.querySelector("[data-toggle-sidebar]");
    if (sidebar && toggleSidebar) {
        sidebar.classList.add("-translate-x-full");
        toggleSidebar.setAttribute("data-is-open", "false");
        document.body.classList.remove("overflow-y-auto");
    }
});

</script>