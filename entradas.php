<?php
require '../proyectoBolivar/includes/funciones.php';
incluirTemplate('header');

require '../proyectoBolivar/includes/config/db.php';
$db = conectarDB();

$consulta = "SELECT * FROM calendario ORDER BY idCalendario DESC LIMIT 2";

$resultado = mysqli_query($db, $consulta);
$partidos = [];
while ($calendario = $resultado->fetch_assoc()) {
    $partidos[] = $calendario;
}

$partido1 = $partidos[0];
$partido2 = $partidos[1];
?>
<style>
    #clockdiv {
        font-family: sans-serif;
        color: #fff;
        display: inline-block;
        font-weight: 100;
        text-align: center;
        font-size: 30px;
    }

    #clockdiv>div {
        padding: 10px;
        border-radius: 3px;
        background: #00BF96;
        display: inline-block;
    }

    #clockdiv div>span {
        padding: 15px;
        border-radius: 3px;
        background: #00816A;
        display: inline-block;
    }
</style>
<section>
    <section class="relative bg-[url(../proyectobolivar/public/img/fondoTime.jpg)] bg-cover bg-center bg-no-repeat ">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:justify-center lg:px-8">

            <div class="max-w-xl text-center">
                <h1 class=" text-3xl font-extrabold sm:text-5xl text-white mt-24">
                    Próximo encuentro
                    <strong class="block font-extrabold ">
                        <?php echo date('d F Y', strtotime($partido1['fecha'])); ?>
                    </strong>
                </h1>

                <div class="flex flex-row items-center justify-center my-10">
                    <img src="/proyectoBolivar/admin/calendario/img/<?php echo $partido1['equipoImagenUno']; ?>" alt="Bolivar" class="h-28 w-28" />
                    <span class="font-extrabold text-white text-3xl px-4">
                        VS
                    </span>
                    <img src="/proyectoBolivar/admin/calendario/img/<?php echo $partido1['equipoImagenDos']; ?>" alt="Millonarios" class="h-28 w-28" />
                </div>


                <div class="mt-8 flex flex-wrap gap-4 justify-center mb-10">
                    <button label="Comprar Entradas" direccion="/entradas/tickets" />
                </div>
                <div id="clockdiv">
                    <div>
                        <span class="days"></span>
                        <div class="smalltext">Dia(s)</div>
                    </div>
                    <div>
                        <span class="hours"></span>
                        <div class="smalltext">Hora(s)</div>
                    </div>
                    <div>
                        <span class="minutes"></span>
                        <div class="smalltext">Minuto(s)</div>
                    </div>
                    <div>
                        <span class="seconds"></span>
                        <div class="smalltext">Segundo(s)</div>
                    </div>
                </div>
                <div>
                    <a href="../proyectoBolivar/entradas/tickets.php">ENTRADAS</a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-picton-blue-200 p-6 md:p-24">
        <div class="mx-auto max-w-screen-xl border-8 rounded border-picton-blue-700 p-4 md:p-10">
            <div class="text-center my-2 p-4 md:p-10 font-bold text-black">
                <h2 class="text-xl md:text-4xl my-2 ">
                    Proximo Encuentro
                    <span class="py-2 block bg-clip-text text-transparent bg-gradient-to-r font-extrabold from-cyan-800 via-green-500 to-picton-blue-500">
                        [<?php echo $partido2['titulo']; ?>]
                    </span>
                </h2>
                <p class="text-lg md:text-xl">
                    <?php echo $partido2['descripcion']; ?>
                </p>
            </div>
            <div class="flex flex-col md:flex-row justify-around items-center ">
                <div class="mb-4 md:mb-0">
                    <p class="text-center font-extrabold"><?php echo $partido2['equipoUno']; ?></p>
                    <img src="/proyectoBolivar/admin/calendario/img/<?php echo $partido2['equipoImagenUno']; ?>" alt="equipo local " width="150" height="150" class=" mx-auto rounded-2xl" />

                </div>
                <span class="text-bold text-black text-3xl md:text-4xl mb-4 md:mb-0">
                    VS
                </span>
                <div>
                    <p class="text-center font-extrabold"><?php echo $partido2['equipoDos']; ?></p>
                    <img src="/proyectoBolivar/admin/calendario/img/<?php echo $partido2['equipoImagenDos']; ?>" alt="equipo visitante" class=" mx-auto rounded-2xl" width="150" height="150" />
                </div>
            </div>
        </div>
    </section>
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
<script>
    function getTimeRemaining(endtime) {
        const t = Date.parse(endtime) - Date.parse(new Date());
        const seconds = Math.floor((t / 1000) % 60);
        const minutes = Math.floor((t / 1000 / 60) % 60);
        const hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        const days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime) {
        const clock = document.getElementById(id);
        const daysSpan = clock.querySelector('.days');
        const hoursSpan = clock.querySelector('.hours');
        const minutesSpan = clock.querySelector('.minutes');
        const secondsSpan = clock.querySelector('.seconds');

        function updateClock() {
            const t = getTimeRemaining(endtime);

            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if (t.total <= 0) {
                clearInterval(timeinterval);
            }
        }

        updateClock();
        const timeinterval = setInterval(updateClock, 1000);
    }

    // Usa la fecha del próximo partido de tu base de datos
    const deadline = new Date("<?php echo $partido1['fecha']; ?>");
    initializeClock('clockdiv', deadline);
</script>
<?php
incluirTemplate('footer');
?>