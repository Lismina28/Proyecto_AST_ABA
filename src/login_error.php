<?php
    session_start();
    
    $idioma = $_GET["idioma"] ?? $_SESSION["idioma"];

    $fichero = "$idioma.php";

    $_SESSION["idioma"] = $idioma;

    require $fichero; //es.php, en.php o ko.php

    $modo = "claro";

    if(isset($_GET["theme"])){
        $_SESSION["theme"] = $_GET["theme"];
    }

    $modo = $_SESSION["theme"] ?? "light";

?>

<html data-bs-theme="<?php echo ($modo == "light") ? "light" : "dark" ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="img/logo2.png">
    <!-- Enlace para los estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body {
        
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        flex-direction: column;
        position: relative;
        font-family: "Comic Sans MS";
        color: #000 !important;
        /* Esto permitirá que los botones estén posicionados en la esquina */
    }

    /* fondo para modo claro */
    html[data-bs-theme="light"] body {
        background-image: url("img/Fondo.jpg");
        background-size: cover;
        background-position: center;
    }

    /* fondo para modo oscuro */
    html[data-bs-theme="dark"] body {
        background-image: url("img/Fondo2.jpg");
        background-size: cover;
        background-position: center;
    }


    h1 {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 30px;
        color: #000 !important;
    }

    button {
        background-color: rgba(246, 127, 196, 1);
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
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

    <h1><?= $traducciones["title_error"] ?></h1>
    <p><?= $traducciones["error_msg"]?></p>
    <button onclick="window.location.href='login.php'"><?= $traducciones["return_login"]?>

    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> <!-- Está esto para que funcione lo del modo claro/oscuro -->

</body>

</html>