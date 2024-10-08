<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo URL_PROJECT?>/css/style.css">
    <title><?php echo NAME_PROJECT ?></title>
</head>



<body>

    <header>

        <div class="logo">
            <h1>Social Code</h1>
        </div>

    </header>

    <div class="container" id="container">

        <div class="form-container sign-up">
            <form>
                <h1>Crea una Cuenta</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>O ingresa tus datos para el registro</span>
                <input type="text" placeholder="Nombre">
                <input type="email" placeholder="Correo Electronico">
                <input type="password" placeholder="contraseña">
                <button>Registrarse</button>
            </form>
        </div>



        <div class="form-container sign-in">
            <form>
                <h1>Iniciar sesión</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>O utiliza tu correo y contraseña</span>
                <input type="email" placeholder="Correo Electronico">
                <input type="password" placeholder="contraseña">
                <a href="#">Olvidaste tu contraseña?</a>
                <button>Iniciar sesión</button>
            </form>
        </div>


        <div class="toggle-container">
            <div class="toggle">

                <div class="toggle-panel toggle-left">
                    <h1>Bienvenido Programador!</h1>
                    <p>Ingresa los datos del registro para Iniciar Sesión</p>
                    <button class="hidden" id="login">Iniciar Sesión</button>
                </div>

                <div class="toggle-panel toggle-right">
                    <h1>Aún no tienes cuenta?</h1>
                    <p>Registrate con tus datos para poder acceder a la Red de programadores</p>
                    <button class="hidden" id="register">Registrarse</button>
                </div>

            </div>
        </div>

    </div>

    <script src="<?php echo URL_PROJECT?>/js/script.js"></script>
</body>

</html>