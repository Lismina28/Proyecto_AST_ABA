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

        .galeria_personajes {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 10px;
            margin-top: 15px;
        }

        .personajes-card {
            display: flex;
            flex-direction: row;
            align-items: center;
            width: 45%;
            min-width: 300px;
            padding: 10px;
            background-color: rgba(197, 26, 126, 0.5);
            border-radius: 8px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        }

        .personajes-card img {
            width: 150px;
            margin-right: 15px;
            max-height: 150px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 0;
        }

        .personajes-card p {
            margin:  0;
            color: #333;
        }

        .personaje-text-container {
            flex-grow: 1;
        }

        details {
            max-width: 800px;
            margin: 10px auto 20px auto;
            padding: 15px;
            border-radius: 8px;
            background-color: rgba(251, 190, 225, 0.7);
            color: #333;
        }

        h2 {
            max-width: 800px;
            margin: 30px auto 10px auto;
            padding: 5px 15px;
            border-radius: 5px;
            background-color: rgba(246, 127, 196, 0.7);
            color: #333;
        }

        h1 {
            text-align: center;
            padding: 10px;
            background-color: rgba(246, 127, 196, 0.7);
            max-width: 800px;
            margin: 0 auto;
            border-radius: 5px;
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
        <div class="galeria_personajes">
            <div class="personajes-card">
                <img src="img/Penélope_card3.png" alt="Penelope Eckart">
                <div class="personaje-text-container">
                <p><?= $traducciones["personaje_penelope"] ?></p>
                </div>
            </div>
            <div class="personajes-card">
                <img src="img/Callisto_card3.png" alt="Callisto Regulus">
                <div class="personaje-text-container">
                <p><?= $traducciones["personaje_callisto"] ?></p>
                </div>
            </div>
            <div class="personajes-card">
                <img src="img/Reynold_card3.png" alt="Reynold Eckart">
                <div class="personaje-text-container">
                <p><?= $traducciones["personaje_reynold"] ?></p>
                </div>
            </div>
            <div class="personajes-card">
                <img src="img/Derrick_card3.png" alt="Derrick Eckart">
                <div class="personaje-text-container">
                <p><?= $traducciones["personaje_derrick"] ?></p>
                </div>
            </div>
            <div class="personajes-card">
                <img src="img/Winter_card3.png" alt="Winter Veronandi">
                <div class="personaje-text-container">
                <p><?= $traducciones["personaje_winter"] ?></p>
                </div>
            </div>
            <div class="personajes-card">
                <img src="img/Eclise_card3.png" alt="Eclise">
                <div class="personaje-text-container">
                <p><?= $traducciones["personaje_eclise"] ?></p>
                </div>
            </div>
        </div>
    </details>

    <h2><?= $traducciones["contacto"] ?? "Contacto" ?></h2>
    <details>
        <summary><?= $traducciones["informacion_contacto"] ?? "Información de Contacto" ?></summary>
        <p><?= $traducciones["email"] ?> pgb61853@educastur.es</p>
        <p><?= $traducciones["email"] ?>jri46730@educastur.es</p>
        </div>
    </details>

</body>

</html>