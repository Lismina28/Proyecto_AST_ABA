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
    <title><?= $traducciones["titulo_inicio"] ?? "El único final de la villana es la muerte" ?></title>
    <link rel="icon" type="image/png" href="img/logo2.png">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <style>
        /* Estilos CSS básicos para el layout y los botones */
        body { 
            background-image: url('img/Fondo.jpg');
            background-size: cover;
            font-family: 'Comic Sans MS'; margin: 20px; }
        .header-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
        }
        .logo { width: 50px; height: 50px; /* logo */ }
        .nav-links a { margin-right: 15px; text-decoration: none; color: #333; }
        .language-buttons img { width: 32px; height: 32px; margin-left: 10px; cursor: pointer; }
        .collapsible-content { display: none; margin-top: 10px; padding-left: 20px; border-left: 2px solid #eee; }
        .collapsible-title { cursor: pointer; font-weight: bold; }
        .collapsible-title:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <div class="header-bar">
        <div class="logo-area">
            <a href="index.php"><img src="img/logo2.png" alt="Logo de la Web" class="logo"></a>
            </div>
        <div class="nav-links">
            <a href="inicio.php" class="btn btn-sm" style="background:#ff6fb1; color:white; border:none;"><?= $traducciones["link_inicio"]?></a>
            <a href="preguntas.php" class="btn btn-sm" style="background:#ff6fb1; color:white; border:none;"><?= $traducciones["link_cuestionario"]?></a>
            <a href="contacto.php" class="btn btn-sm" style="background:#ff6fb1; color:white; border:none;"><?= $traducciones["link_contacto"]?></a>
        </div>
        <div class="language-buttons">
            <a href="?idioma=es"><img src="https://cdn-icons-png.flaticon.com/512/197/197593.png" alt="Español" title="Español"></a>
            <a href="?idioma=en"><img src="https://cdn-icons-png.flaticon.com/512/197/197484.png" alt="English" title="English"></a>
            <a href="?idioma=ko"><img src="https://cdn-icons-png.flaticon.com/128/5111/5111586.png" alt="Coreano" title="Coreano"></a>
            <a href="login.php" class="btn btn-sm btn-outline-secondary ms-3"><?= $traducciones["logout"]?></a>
        </div>
    </div>

    <h1><?= $traducciones["bienvenido"] ?? "Bienvenido a la Web, " ?><?= $_SESSION['nombre_usuario'] ?? 'Usuario' ?></h1>
    <div style="text-align: center; margin-bottom: 30px;">
        <img src="img/Penélope_Eckhart.jpg" alt="Penelope Eckart" style="max-width: 300px; border-radius: 10px;">
    </div>


    <h2><?= $traducciones["informacion"]?></h2>
    <details>
        <summary><?= $traducciones["titulo"] ?></summary> 
        <p><?= $traducciones["parrafo1"]?></p>
    </details>

    <h2><?= $traducciones["personajes"]?></h2>
   <!-- <div id="aficiones-content" class="collapsible-content"> -->
    <details>
        <summary><?= $traducciones["lista_personajes"] ?? "Personajes" ?></summary>
        <ul>
            <li><?= $traducciones["personaje_penelope"] ?? "Penelope Eckart: La protagonista reencarnada." ?></li>
            <li><?= $traducciones["personaje_callisto"] ?? "Príncipe Heredero Callisto Regulus: El loco pero encantador." ?></li>
            <li><?= $traducciones["personaje_reynold"] ?? "Reynold Eckart: El segundo hijo de la casa Eckart." ?></li>
            <li><?= $traducciones["personaje_derrick"] ?? "Derrick Eckart: El primer hijo de la casa Eckart." ?></li>
            <li><?= $traducciones["personaje_winter"] ?? "Winter Vinter: El mago y duque." ?></li>
            <li><?= $traducciones["personaje_eclise"] ?? "Eclise: El esclavo de Penelope." ?></li>
        </ul>
    </details>

    <h2 class="collapsible-title" onclick="toggleContent('contacto-content')"><?= $traducciones["titulo_contacto"] ?? "Contacto" ?></h2>
    <div id="contacto-content" class="collapsible-content">
        <p><?= $traducciones["contacto_texto"] ?? "Si tienes preguntas o comentarios sobre el manhwa, no dudes en contactarnos a través de nuestra página de <a href='contacto.php'>Contacto</a>." ?></p>
    </div>
<?php
    /*<script>
        function toggleContent(id) {
            var content = document.getElementById(id);
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        }
    </script>*/
    ?>
</body>
</html>
