<?php
require 'includes/funciones.php';

incluirTemplate('header');

require_once 'includes/config/db.php';
$db = conectarDB();

$errores = [];
$nombre = '';
$apellido_paterno = '';
$apellido_materno = '';
$ci = '';
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $apellido_paterno = mysqli_real_escape_string($db, $_POST['apellido_paterno']);
    $apellido_materno = mysqli_real_escape_string($db, $_POST['apellido_materno']);
    $ci = mysqli_real_escape_string($db, $_POST['ci']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);

    // Validar campos
    if (empty($nombre)) {
        $errores['nombre'] = "El nombre es obligatorio";
    }
    if (empty($apellido_paterno)) {
        $errores['apellido_paterno'] = "El apellido paterno es obligatorio";
    }
    if (empty($apellido_materno)) {
        $errores['apellido_materno'] = "El apellido materno es obligatorio";
    }
    if (empty($ci)) {
        $errores['ci'] = "La cédula de identidad es obligatoria";
    }
    if (empty($email)) {
        $errores['email'] = "El correo electrónico es obligatorio";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = "El correo electrónico no es válido";
    }
    if (empty($password)) {
        $errores['password'] = "La contraseña es obligatoria";
    }
    if ($password !== $confirm_password) {
        $errores['confirm_password'] = "Las contraseñas no coinciden";
    }

    // Si no hay errores, proceder con la inserción
    if (empty($errores)) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO usuario (nombre, a_paterno, a_materno, ci, email, password, rol) VALUES ('$nombre', '$apellido_paterno', '$apellido_materno', '$ci', '$email', '$password_hash', 'usuario')";

        $resultado = mysqli_query($db, $query);

        if ($resultado) {
            echo "<script>
                alert('Usuario registrado correctamente');
                window.location.href = 'tienda.php';
            </script>";
            // header('Location: proyectobolivar');
        } else {
            echo "<script>
                alert('Usuario no registrado correctamente');
            </script>";
        }
    }
}
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
                        Registra siguientes datos para poder empezar a comprar en
                        nuestra tienda!
                    </p>
                </div>

                <form action="" method="POST">
                    <div class="space-y-3">
                        <div>
                            <label class="block mb-3 text-sm font-medium text-black">
                                Nombre(s)
                            </label>
                            <input name="nombre" class="block w-full h-12 px-4 py-2 text-blue-500 duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm" type="text" placeholder="Nombre" value="<?php echo htmlspecialchars($nombre); ?>" />
                            <?php if (isset($errores['nombre'])) : ?>
                                <p class="text-red-500 text-sm mt-2"><?php echo $errores['nombre']; ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="col-span-full">
                            <label class="block mb-3 text-sm font-medium text-black">
                                Apellido Paterno
                            </label>
                            <input name="apellido_paterno" class="block w-full h-12 px-4 py-2 text-blue-500 duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm" type="text" placeholder="Apellido Paterno" value="<?php echo htmlspecialchars($apellido_paterno); ?>" />
                            <?php if (isset($errores['apellido_paterno'])) : ?>
                                <p class="text-red-500 text-sm mt-2"><?php echo $errores['apellido_paterno']; ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="col-span-full">
                            <label class="block mb-3 text-sm font-medium text-black">
                                Apellido Materno
                            </label>
                            <input name="apellido_materno" class="block w-full h-12 px-4 py-2 text-blue-500 duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm" type="text" placeholder="Apellido Materno" value="<?php echo htmlspecialchars($apellido_materno); ?>" />
                            <?php if (isset($errores['apellido_materno'])) : ?>
                                <p class="text-red-500 text-sm mt-2"><?php echo $errores['apellido_materno']; ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="col-span-full">
                            <label class="block mb-3 text-sm font-medium text-black">
                                Cedula de Identidad
                            </label>
                            <input name="ci" class="block w-full h-12 px-4 py-2 text-blue-500 duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm" type="text" placeholder="CI" value="<?php echo htmlspecialchars($ci); ?>" />
                            <?php if (isset($errores['ci'])) : ?>
                                <p class="text-red-500 text-sm mt-2"><?php echo $errores['ci']; ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="col-span-full">
                            <label class="block mb-3 text-sm font-medium text-black">
                                Correo Electronico
                            </label>
                            <input name="email" class="block w-full h-12 px-4 py-2 text-blue-500 duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm" type="email" placeholder="Correo" value="<?php echo htmlspecialchars($email); ?>" />
                            <?php if (isset($errores['email'])) : ?>
                                <p class="text-red-500 text-sm mt-2"><?php echo $errores['email']; ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="col-span-full">
                            <label class="block mb-3 text-sm font-medium text-black">
                                Contraseña
                            </label>
                            <input name="password" class="block w-full h-12 px-4 py-2 text-blue-500 duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm" type="password" placeholder="Escriba una contraseña" />
                            <?php if (isset($errores['password'])) : ?>
                                <p class="text-red-500 text-sm mt-2"><?php echo $errores['password']; ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="col-span-full">
                            <label class="block mb-3 text-sm font-medium text-black">
                                Confirmar Contraseña
                            </label>
                            <input name="confirm_password" class="block w-full h-12 px-4 py-2 text-blue-500 duration-200 border rounded-lg appearance-none bg-chalk border-zinc-300 placeholder-zinc-300 focus:border-zinc-300 focus:outline-none focus:ring-zinc-300 sm:text-sm" type="password" placeholder="Escriba una contraseña" />
                            <?php if (isset($errores['confirm_password'])) : ?>
                                <p class="text-red-500 text-sm mt-2"><?php echo $errores['confirm_password']; ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="col-span-full">
                            <button type="submit" class="inline-flex items-center justify-center w-full h-12 gap-3 px-5 py-3 font-bold text-white duration-200 bg-picton-blue-900 rounded-xl hover:bg-picton-blue-700 focus:ring-2 focus:ring-offset-2 focus:ring-black">
                                Registrarse
                            </button>
                        </div>
                    </div>
                    <div class="mt-6">
                        <p class="flex mx-auto text-sm font-medium leading-tight text-center text-black">
                            ¿Ya tienes una cuenta?
                            <a class="ml-auto text-blue-500 hover:text-black" href="\proyectoBolivar\login.php">
                                Inicia Sesion
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
        <div class="hidden bg-white lg:block lg:flex-1 lg:relative sm:contents">
            <div class="absolute inset-0 object-cover w-full h-full bg-white">
                <img class="mx-auto w-auto h-full bg-gray-200" src="../proyectoBolivar/public/logo/login.png" alt="" width="1310" height="873" />
            </div>
        </div>
    </div>
</section>