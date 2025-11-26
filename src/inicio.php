<?php
session_start();

// Si el usuario no está logueado, se redirige a login.php
if (!isset($_SESSION['usuario_logueado']) || $_SESSION['usuario_logueado'] !== true) {
    header('Location: login.php'); // O a tu página de login
    exit();
}


$idioma = $_GET["idioma"] ?? $_SESSION["idioma"] ?? 'es';
$_SESSION["idioma"] = $idioma;
require "$idioma.php";
?>

<!DOCTYPE html>
<html lang="<?= $idioma ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $traducciones["titulo_inicio"] ?></title>
    <link rel="icon" type="image/png" href="img/logo2.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos para los botones de las banderas */
        .language-buttons {
            display: flex;
            gap: 10px;
            align-items: center;
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

        /* Estilos CSS básicos para el layout y los botones */
        body {
            background: url('img/Fondo.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Comic Sans MS';
            margin: 20px;
        }

        .header-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
        }
        h1 {
            text-align: center;
        }
        .right-controls {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo {
            width: 50px;
            height: 50px;
            /* logo */
        }

        .nav-links a {
            margin-right: 0;
            text-decoration: none;
            color: #333;
        }

        .collapsible-content {
            display: none;
            margin-top: 10px;
            padding-left: 20px;
            border-left: 2px solid #eee;
        }

        .collapsible-title {
            cursor: pointer;
            font-weight: bold;
        }

        .collapsible-title:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="header-bar">
        <div class="logo-area">
            <a href="inicio.php"><img src="img/logo2.png" alt="Logo de la Web" class="logo"></a>
        </div>
        <div class="nav-links">
            <a href="inicio.php" class="btn btn-sm" style="background:#ff6fb1; color:white; border:none;"><?= $traducciones["link_inicio"] ?></a>
            <a href="preguntas.php" class="btn btn-sm" style="background:#ff6fb1; color:white; border:none;"><?= $traducciones["link_cuestionario"] ?></a>
        </div>
        
        <div class="language-buttons">
            <a href="?idioma=es"><img src="https://cdn-icons-png.flaticon.com/512/197/197593.png" alt="Español" title="Español"></a>
            <a href="?idioma=en"><img src="https://cdn-icons-png.flaticon.com/512/197/197484.png" alt="English" title="English"></a>
            <a href="?idioma=ko"><img src="https://cdn-icons-png.flaticon.com/128/5111/5111586.png" alt="Coreano" title="Coreano"></a>
            <a href="login.php" class="btn btn-sm" style="background:#ff6fb1; color:white; border:none;"><?= $traducciones["logout"] ?></a>
        </div>
    </div>

    <h1><?= $traducciones["bienvenido"] ?? "Bienvenido a la Web, " ?><?= $_SESSION['nombre_usuario'] ?? 'Usuario' ?></h1>
    <div style="text-align: center; margin-bottom: 30px;">
        <img src="img/Penélope_Eckhart.jpg" alt="Penelope Eckart" style="max-width: 300px; border-radius: 10px;">
    </div>


    <h2><?= $traducciones["informacion"] ?></h2>
    <details>
        <summary><?= $traducciones["titulo"] ?></summary>
        <p><?= $traducciones["parrafo1"] ?></p>
    </details>

    <h2><?= $traducciones["personajes"] ?></h2>

    <details>
        <summary><?= $traducciones["lista_personajes"] ?? "Personajes" ?></summary>
        <ul>
            <li><?= $traducciones["personaje_penelope"] ?></li>
            <li><?= $traducciones["personaje_callisto"] ?></li>
            <li><?= $traducciones["personaje_reynold"] ?></li>
            <li><?= $traducciones["personaje_derrick"] ?></li>
            <li><?= $traducciones["personaje_winter"] ?></li>
            <li><?= $traducciones["personaje_eclise"] ?></li>
        </ul>
    </details>

    <h2><?= $traducciones["contacto"] ?? "Contacto" ?></h2>
    <details>
        <summary><?= $traducciones["informacion_contacto"] ?? "Información de Contacto" ?></summary>
        <p><?= $traducciones["email"] ?> pgb61853@educastur.es</p>
        <p><?= $traducciones["email"] ?>jri46730@educastur.es</p>
    </details>

</body>

</html>