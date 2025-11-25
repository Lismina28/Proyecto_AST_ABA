<?php

    session_start();
    
    if(!isset($_SESSION["attempts"])){
        $_SESSION["attempts"] = 3;
    }


    if(isset($_GET["idioma"])){
        $_SESSION["idioma"] = $_GET["idioma"];
    }


    if(isset($_GET["theme"])){
        $_SESSION["theme"] = $_GET["theme"];
    }
    

    $idioma = $_SESSION["idioma"] ?? "es";

    $fichero = "$idioma.php";

    $_SESSION["idioma"] = $idioma;

    require $fichero; //es.php, en.php o ko.php

    $modo = $_SESSION["theme"] ?? "light";




    if($_SERVER["REQUEST_METHOD"] == "POST") {

            $usuario_correcto = "admin";
            $contraseña_correcta = "1234";

            $usuario = $_POST["user"] ?? "";
            $contraseña = $_POST["password"] ?? "";

            if($usuario == $usuario_correcto && $contraseña == $contraseña_correcta){
                header("Location: home.php");
                exit;
            } else {
                $_SESSION["attempts"]--; //incrementa si son incorrectos los datos

                if($_SESSION["attempts"] <= 0) {
                    $_SESSION["attempts"] = 3;
                    header("Location: login_error.php");

                if($usuario == $usuario_correcto && $contraseña == $contraseña_correcta){
                    $_SESSION["usuario_logueado"] = true;
                    $_SESSION["nombre_usuario"] = $usuario;
                    header("Location: inicio.php");
                    exit;
                }
            }
        }
    }


?>


<html data-bs-theme="<?php echo ($modo == "light") ? "light" : "dark" ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Enlace para los estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="oscuro.css">-->
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        flex-direction: column;
        position: relative;
        /* Esto permitirá que los botones estén posicionados en la esquina */
    }

    h1 {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 30px;
    }

    .login-form {
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        text-align: center;
    }

    .login-form input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    .login-form button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .login-form button:hover {
        background-color: #0056b3;
    }

    .login-form .form-group {
        margin-bottom: 15px;
    }

    .login-form .text-center a {
        color: #007bff;
        text-decoration: none;
    }

    .login-form .text-center a:hover {
        text-decoration: underline;
    }

    /* Estilos para los botones de las banderas */
    .language-buttons {
        position: absolute;
        top: 20px;
        right: 20px;
        display: flex;
        gap: 10px;
    }

    .language-buttons img {
        width: 40px;
        /* Tamaño de las banderas */
        height: auto;
        cursor: pointer;
        border-radius: 4px;
        transition: transform 0.2s;
    }

    .language-buttons img:hover {
        transform: scale(1.1);
        /* Efecto de hover */
    }

    /* Estilos para los botones del modo claro/oscuro */

    .theme-buttons {
        position: absolute;
        top: 20px;
        left: 20px;
        display: flex;
        gap: 10px;
    }

    .theme-buttons img {
        width: 40px;
        /* Tamaño de las banderas */
        height: auto;
        cursor: pointer;
        border-radius: 4px;
        transition: transform 0.2s;
    }

    .theme-buttons img:hover {
        transform: scale(1.1);
        /* Efecto de hover */
    }
    </style>
</head>

<body>
    <!-- Botones de idioma en la esquina superior derecha usando iconos de Flaticon -->
    <div class="language-buttons">
        <!-- Bandera de España (SVG de Flaticon) -->
        <a href="?idioma=en"><img src="https://cdn-icons-png.flaticon.com/512/197/197484.png" alt="English"
                title="English"></a>
        <!-- Bandera de Reino Unido (SVG de Flaticon) -->
        <a href="?idioma=es"><img src="https://cdn-icons-png.flaticon.com/512/197/197593.png" alt="Español"
                title="Español"></a>
        <!-- Bandera de Corea (SVG de Flaticon) -->
        <a href="?idioma=ko"><img src="https://cdn-icons-png.flaticon.com/128/5111/5111586.png" alt="Coreano"
                title="Coreano"></a>
    </div>

    <div class="theme-buttons">
        <!-- Icono de modo oscuro (luna) -->
        <a href="?theme=dark"><img src="https://cdn-icons-png.flaticon.com/128/3594/3594375.png" alt="Oscuro"
                title="Oscuro"></a>
        <!-- Icono de modo claro (sol) -->
        <a href="?theme=light"><img src="https://cdn-icons-png.flaticon.com/128/2698/2698240.png" alt="Claro"
                title="Claro"></a>

    </div>

    <h1><?= $traducciones["title"] ?></h1>

    <div class="login-form" data-bs-theme="dark">
        <form method="post">
            <input type="text" id="user" name="user" placeholder="<?= $traducciones["user"] ?>" required>
            <input type="password" id="password" name="password" placeholder="<?= $traducciones["password"] ?>"
                required>
            <button type="submit"><?= $traducciones["login"] ?></button>
        </form>
    </div>
    <?php if($_SESSION["attempts"] < 3): ?>
    <p><?=$traducciones["remaining_attempts"]?> <?= $_SESSION["attempts"] ?> </p>
    <?php endif; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Está esto para que funcione lo del modo claro/oscuro -->

</body>

</html>