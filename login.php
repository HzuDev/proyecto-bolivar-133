<?php

require '../proyectoBolivar/includes/config/db.php';
$db = conectarDB();

$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if (!$email) {
        $errores[] = 'El email es obligatorio';
    }

    if (!$password) {
        $errores[] = 'El password es obligatorio';
    }

    if (empty($errores)) {
        $auth = false;
        $con_sql = "SELECT * FROM usuario where email='$email'";
        $res = mysqli_query($db, $con_sql);

        if ($res && $res->num_rows) {
            $usuario = mysqli_fetch_array($res);
            var_dump($usuario);
            if ($usuario && isset($usuario['password'])) {
                $auth = password_verify($password, $usuario['password']);
                // var_dump($auth);
            }
        }

        if ($auth) {
            session_start();
            $_SESSION['usuario'] = $usuario['email'];
            $_SESSION['login'] = true;
            $_SESSION['rol'] = $usuario['rol'];
            // var_dump($_SESSION);
            // Asumiendo que el rol del usuario se almacena en $usuario['rol']
            if ($usuario['rol'] == 'admin') {
                header('Location: admin');
            } else if ($usuario['rol'] == 'usuario') {
                header('Location: tienda.php');
            }
            exit;
        } else {
            $errores[] = 'El email o contraseña son incorrectos';
        }

        // var_dump($res);
    }
}


require '../proyectoBolivar/includes/funciones.php';
incluirTemplate('header');

?>

<section class="pt-24">
    <div class="relative flex justify-center max-h-full overflow-hidden lg:px-0 md:px-12">
        <div class="relative z-10 flex flex-col flex-1 px-4 py-10 bg-white lg:border-r lg:py-24 md:flex-none md:px-28 sm:justify-center">
            <div class="w-full max-w-md mx-auto md:max-w-sm md:px-0 md:w-96 sm:px-4">
                <div class="flex flex-col">
                    <h1 class="text-3xl font-semibold tracking-tighter text-gray-900">
                        Bienvenido
                    </h1>
                    <p class="mt-4 text-base font-medium text-gray-500">
                        Ingresa con los datos de tu cuenta
                    </p>
                </div>
                <div class="mt-8">
                    <a href="/socio" class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3  duration-200 bg-gradient-to-r from-picton-blue-500 via-picton-blue-700 to-picton-blue-500 rounded-xl  text-gray-50 font-bold hover:bg-picton-blue-800 " type="button" aria-label="Registrate como socio">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 9C4 8.44772 4.44772 8 5 8H9C9.55228 8 10 8.44772 10 9C10 9.55228 9.55228 10 9 10H5C4.44772 10 4 9.55228 4 9Z" fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 3C1.79086 3 0 4.79086 0 7V17C0 19.2091 1.79086 21 4 21H20C22.2091 21 24 19.2091 24 17V7C24 4.79086 22.2091 3 20 3H4ZM20 5H4C2.89543 5 2 5.89543 2 7V14H22V7C22 5.89543 21.1046 5 20 5ZM22 16H2V17C2 18.1046 2.89543 19 4 19H20C21.1046 19 22 18.1046 22 17V16Z" fill="currentColor" />
                        </svg>
                        <span>Hazte Socio</span>
                    </a>

                    <div class="relative py-3">
                        <div class="absolute inset-0 flex items-center" aria-hidden="true">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center">
                            <span class="px-2 text-sm text-black bg-white">
                                O continuar con
                            </span>
                        </div>
                    </div>
                </div>
                <?php foreach ($errores as $error) : ?>
                    <div class="alerta error">
                        <?php echo $error; ?>
                    </div>
                <?php endforeach; ?>

                <form method="POST">
                    <div class="space-y-3">
                        <div>
                            <label class="block mb-3 text-sm font-medium text-black">
                                Correo Electronico
                            </label>
                            <input name="email" type="text" id="correo" placeholder="Usuario o correo electronico" class="block w-full h-12 px-4 py-2 text-blue-500 duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm" />
                        </div>
                        <div class="col-span-full">
                            <label class="block mb-3 text-sm font-medium text-black">
                                Contraseña
                            </label>
                            <input name="password" id="password" class="block w-full h-12 px-4 py-2 text-blue-500 duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm" placeholder="Escribe tu contraseña" type="password" />
                        </div>

                        <div class="col-span-full">
                            <button value="Iniciar Sesion" type="submit" class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 font-bold text-white duration-200 bg-picton-blue-900 rounded-xl hover:bg-picton-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-black">
                                Iniciar sesión
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <p class="flex mx-auto text-sm font-medium leading-tight text-center text-black">
                            ¿No tiene contraseña?
                            <a class="ml-auto text-blue-500 hover:text-black" href="\proyectoBolivar\registrarse.php">
                                Registrate ahora
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div class="hidden bg-white lg:block lg:flex-1 lg:relative sm:contents">
            <div class="absolute inset-0 object-cover w-full h-full bg-white">
                <img class=" mx-auto  w-auto h-full bg-gray-200" src="../proyectoBolivar/public/logo/login.png" alt="" width="1310" height="873" />
            </div>
        </div>
    </div>
</section>
<?php
incluirTemplate('footer');
?>