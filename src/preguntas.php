<?php
<<<<<<< HEAD
$modo = "claro";

?>

<html data-bs-theme="<?php echo ($modo == "claro") ? "light" : "dark" ?>">
=======
 session_start();

 if (!isset($_SESSION['usuario_logueado']) || $_SESSION['usuario_logueado'] !== true) {
    header('Location: login.php'); // O a tu página de login
    exit();
}
    
    $idioma = $_GET["idioma"] ?? $_SESSION["idioma"] ?? "es";

    $fichero = "$idioma.php";

    $_SESSION["idioma"] = $idioma;

    require $fichero; //es.php, en.php o ko.php

 

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $traducciones["el_unico_final"] ?></title> 
         <link rel="icon" type="image/png" href="img/logo2.png">
        <!-- Enlace para los estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .language-buttons {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .language-buttons img {
            width: 32px;
            height: 32px;
            margin-left: 10px;
            cursor: pointer;
        }
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
        </div>
         
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
        <h1><?= $traducciones["cuestionario"] ?></h1>
      
    <form action="resultado.php" method="POST">
>>>>>>> refs/remotes/origin/master

<head>
    <meta charset="UTF-8">
    <title>El único final de la villana es la muerte</title>
    <!-- Enlace para los estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<<<<<<< HEAD
<body>
    <h1>Cuestionario "El unico final de la villana es la muerte"</h1>
    <div class="form" data-bs-theme="<?php echo ($modo == "claro") ? "light" : "dark" ?>">
        <form action="resultado.php" method="POST">



            <h2>Preguntas</h2>

            <!-- 1 -->
            <p>1. ¿Quién son los dos hermanos adoptivos de Pénelope?</p>
            <input type="radio" name="pregunta1" value="cyw">Callisto y Winter<br>
            <input type="radio" name="pregunta1" value="ryd">Reynold y Derrik<br>
            <input type="radio" name="pregunta1" value="yyl">Yvonne y Laila<br>
            <input type="radio" name="pregunta1" value="eyk">Eclise y Kaden<br>

            <!-- 2 -->
            <p>2. ¿Cuál es la dificultad principal de Penélope al inicio del manhwa?</p>
            <select name="pregunta2">
                <option>-Seleccionar-</option>
                <option value="recuerdos">No tiene recuerdos</option>
                <option value="afecto">Sus acciones bajan la barra de afecto</option>
                <option value="muerte">Cualquier decisión incorrecta puede llevarla a la muerte</option>
                <option value="hablar">No puede hablar</option>
            </select>

            <!-- 3 -->
            <p>3. ¿Qué trata de evitar Penélope a toda costa?</p>
            <input type="text" name="pregunta3">

            <!-- 4 -->
            <p>4. ¿Qué color de pelo tiene Penélope Eckhart en “El único final de la villana es la muerte”?</p>
            <input type="radio" name="pregunta4" value="rubio"> Rubio<br>
            <input type="radio" name="pregunta4" value="castaño"> Castaño<br>
            <input type="radio" name="pregunta4" value="rosado"> Rosado<br>

            <!-- 5 -->
            <p>5. ¿Cuál es el objetivo principal de Penelope en la historia?</p>
            <select name="pregunta5">
                <option></option>
                <option value="reina">Convertirse en reina</option>
                <option value="sobrevivir">Sobrevivir en el juego y evitar su muerte</option>
                <option value="venganza">Vengarse de su familia</option>
                <option value="tesoro">Encontrar un tesoro perdido</option>
            </select>

            <!-- 6 -->
            <p>6. ¿Cuál de los siguientes NO es un personaje masculino importante en el manhwa?</p>
            <input type="checkbox" name="pregunta6[]" value="Callisto">Callisto Regulus<br>
            <input type="checkbox" name="pregunta6[]" value="Hermione"> Hermione Granger<br>
            <input type="checkbox" name="pregunta6[]" value="Reynold"> Reynold Eckhart<br>
            <input type="checkbox" name="pregunta6[]" value="Navier"> Navier<br>

            <!-- 7 -->
            <p>7. ¿Cómo se llama la "verdadera" hija de los Eckhart”?</p>
            <input type="text" name="pregunta7">

            <!-- 8 -->
            <p>8. ¿Quién es el caballero exclavo que Pénelope intenta salvar”?</p>
            <input type="radio" name="pregunta8" value="callisto">Callisto<br>
            <input type="radio" name="pregunta8" value="yvonne">Yvonne<br>
            <input type="radio" name="pregunta8" value="eclise">Eclise<br>
            <input type="radio" name="pregunta8" value="kaden">Kaden<br>
=======
        <h2><?= $traducciones["preguntas"] ?></h2>

        <!-- 1 -->
        <p><?= $traducciones["p1"] ?></p>
        <input type="radio" name="pregunta1" value="cyw"><?= $traducciones["r1.1"] ?><br>
        <input type="radio" name="pregunta1" value="ryd"><?= $traducciones["r1.2"] ?><br>
        <input type="radio" name="pregunta1" value="yl"><?= $traducciones["r1.3"] ?><br>
        <input type="radio" name="pregunta1" value="eyk"><?= $traducciones["r1.4"] ?><br>

        <!-- 2 -->
        <p><?= $traducciones["p2"] ?></p>
        <select name="pregunta2">
            <option><?= $traducciones["rs"] ?></option>
            <option value="recuerdos"><?= $traducciones["r2.1"] ?></option>
            <option value="afecto"><?= $traducciones["r2.2"] ?></option>
            <option value="vivir"><?= $traducciones["r2.3"] ?></option>
            <option value="no_habla"><?= $traducciones["r2.4"] ?></option>
        </select>

        <!-- 3 -->
        <p><?= $traducciones["p3"] ?></p>
        <input type="text" name="pregunta3">

        <!-- 4 -->
        <p><?= $traducciones["p4"] ?></p>
        <input type="radio" name="pregunta4" value="rubio"><?= $traducciones["r4.1"] ?><br>
        <input type="radio" name="pregunta4" value="castaño"><?= $traducciones["r4.2"] ?><br>
        <input type="radio" name="pregunta4" value="rosado"><?= $traducciones["r4.3"] ?><br>

        <!-- 5 -->
        <p><?= $traducciones["p5"] ?></p>
        <select name="pregunta5">
            <option><?= $traducciones["rs"] ?></option>
            <option value="ser_reina"><?= $traducciones["r5.1"] ?></option>
            <option value="sobrevivir"><?= $traducciones["r5.2"] ?></option>
            <option value="venganza"><?= $traducciones["r5.3"] ?></option>
            <option value="tesoro"><?= $traducciones["r5.4"] ?></option>
        </select>

        <!-- 6 -->
        <p><?= $traducciones["p6"] ?></p>
        <input type="checkbox" name="pregunta6[]" value="callisto"><?= $traducciones["r6.1"] ?><br>
        <input type="checkbox" name="pregunta6[]" value="hermione"><?= $traducciones["r6.2"] ?><br>
        <input type="checkbox" name="pregunta6[]" value="reynold"><?= $traducciones["r6.3"] ?><br>
        <input type="checkbox" name="pregunta6[]" value="navier"><?= $traducciones["r6.4"] ?><br>

        <!-- 7 -->
        <p><?= $traducciones["p7"] ?></p>
        <input type="text" name="pregunta7">

        <!-- 8 -->
        <p><?= $traducciones["p8"] ?></p>
        <input type="radio" name="pregunta8" value="callisto"><?= $traducciones["r8.1"] ?><br>
        <input type="radio" name="pregunta8" value="yvonne"><?= $traducciones["r8.2"] ?><br>
        <input type="radio" name="pregunta8" value="eclise"><?= $traducciones["r8.3"] ?><br>
        <input type="radio" name="pregunta8" value="kaden"><?= $traducciones["r8.4"] ?><br>

        <!-- 9 -->
        <p><?= $traducciones["p9"] ?></p>
        <select type="text" name="pregunta9">
            <option><?= $traducciones["rs"] ?></option>
            <option value="reencarna"><?= $traducciones["r9.1"] ?></option>
            <option value="absorvida"><?= $traducciones["r9.2"] ?></option>
            <option value="despierta_en_el_juego"><?= $traducciones["r9.3"] ?></option>
            <option value="viaja"><?= $traducciones["r9.4"] ?></option>
            
        </select>

        <!-- 10 -->
        <p><?= $traducciones["p10"] ?></p>
        <input type="text" name="pregunta10">

        <br><br>
        <button type="submit"><?= $traducciones["Enviar"] ?></button>
>>>>>>> refs/remotes/origin/master

            <!-- 9 -->
            <p>9. ¿Cómo llega Penélope Eckhart al mundo del juego?</p>
            <select type="text" name="pregunta9">
                <option>-Seleccionar-</option>
                <option value="muere">Muere en su mundo y reencarna</option>
                <option value="Absorvida">Es absorvida por un libro</option>
                <option value="despierta">Se despierta dentro del juego otome</option>
                <option value="viaja">Viaja por un portal mágico</option>

            </select>

            <!-- 10 -->
            <p>10. ¿Qué personaje tiene un comportamiento obsesivo hacia Penélope?</p>
            <input type="text" name="pregunta10">

            <br><br>
            <input type="submit" value="Enviar respuestas">

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Está esto para que funcione lo del modo claro/oscuro -->

</body>

</html>