<?php
$modo = "claro";

session_start();

if (!isset($_SESSION['usuario_logueado']) || $_SESSION['usuario_logueado'] !== true) {
    header('Location: login.php'); // O a tu página de login
    exit();
}

$idioma = $_GET["idioma"] ?? $_SESSION["idioma"] ?? "es";

$fichero = "$idioma.php";

$_SESSION["idioma"] = $idioma;

require $fichero; //es.php, en.php o ko.php

for ($i = 1; $i <= 10; $i++) {
    $preguntas[$i] = $_POST["pregunta$i"] ?? "";
}

$pregunta6 = $_POST["pregunta6"] ?? []; // checkbox

// Si alguna pregunta está sin responder, redirigir al formulario
for ($i = 1; $i <= 10; $i++) {
    if ($i != 6 && empty($preguntas[$i])) {
        echo "<h2 style='color:red;'>{$traducciones["error"]}</h2>";
        echo "<a href='preguntas.php' class='btn btn-sm' 
        style='background:#ff6fb1; color:white; position:none;'>{$traducciones["volver"]}</a>";
        exit;
    }
}

// Pregunta 6, si no hay ninguna opción marcada, redirigir al formulario
if (empty($pregunta6)) {
    echo "<h2 style='color:red;'>Error: {$traducciones["marcar_opcion"]}</h2>";
    echo "<a href='preguntas.php'>{$traducciones["volver"]}</a>";
    exit;
}

// Corrección
$contador = 0;
$total = 10;


if ($preguntas[1] == "ryd") {
    $contador += 1;
    $r1 = $traducciones["correcto"];
} else {
    $r1 = $traducciones["incorrecto"];
}

if ($preguntas[2] == "afecto") {
    $contador += 1;
    $r2 = $traducciones["correcto"];
} else {
    $r2 = $traducciones["incorrecto"];
}

if (strtolower(trim($preguntas[3])) == "morir") {
    $contador += 1;
    $r3 = $traducciones["correcto"];
} else {
    $r3 = $traducciones["incorrecto"];
}

if ($preguntas[4] == "rosado") {
    $contador += 1;
    $r4 = $traducciones["correcto"];
} else {
    $r4 = $traducciones["incorrecto"];
}

if ($preguntas[5] == "sobrevivir") {
    $contador += 1;
    $r5 = $traducciones["correcto"];
} else {
    $r5 = $traducciones["incorrecto"];
}

$correctas6 = ["hermione", "navier"];
if (array_diff($correctas6, $pregunta6) == [] && count($pregunta6) == count($correctas6)) {
    $contador += 1;
    $r6 = $traducciones["correcto"];
} else {
    $r6 = $traducciones["incorrecto"];
}

if (strtolower(trim($preguntas[7])) == "yvonne") {
    $contador += 1;
    $r7 = $traducciones["correcto"];
} else {
    $r7 = $traducciones["incorrecto"];
}

if ($preguntas[8] == "eclise") {
    $contador += 1;
    $r8 = $traducciones["correcto"];
} else {
    $r8 = $traducciones["incorrecto"];
}

if ($preguntas[9] == "despierta_en_el_juego") {
    $contador += 1;
    $r9 = $traducciones["correcto"];
} else {
    $r9 = $traducciones["incorrecto"];
}

if (strtolower(trim($preguntas[10])) == "eclise") {
    $contador += 1;
    $r10 = $traducciones["correcto"];
} else {
    $r10 = $traducciones["incorrecto"];
}


$nota_final = $contador * 1;
?>
<!-- Mostrar resultado -->
<html data-bs-theme="<?php echo ($modo == "claro") ? "light" : "dark" ?>">

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
            text-align: center;
        }
        .header-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 0;
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
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

        table {
            width: 40%;
            border-collapse: collapse;
            margin: 20px auto;
            border-radius: 5px;
            overflow: hidden;
        }

        table,
        th,
        td {

            padding: 10px;
            text-align: center;
        }

        th {
            background-color: rgba(246, 127, 196, 0.8);
            text-align: left;
            padding: 8px;

        }

        td {
            background-color: rgba(251, 190, 225, 0.7);
            padding: 8px;

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

    <h1><?= $traducciones["resultados"] ?></h1>
    <table cellpadding='8'>
        <tr>
            <th><?= $traducciones["preguntas"] ?></th>
            <th><?= $traducciones["resultado"] ?></th>
        </tr>
        <tr>
            <td><?= $traducciones["pregunta1"] ?></td>
            <td><?= $r1 ?></td>
        </tr>
        <tr>
            <td><?= $traducciones["pregunta2"] ?></td>
            <td><?= $r2 ?></td>
        </tr>
        <tr>
            <td><?= $traducciones["pregunta3"] ?></td>
            <td><?= $r3 ?></td>
        </tr>
        <tr>
            <td><?= $traducciones["pregunta4"] ?></td>
            <td><?= $r4 ?></td>
        </tr>
        <tr>
            <td><?= $traducciones["pregunta5"] ?></td>
            <td><?= $r5 ?></td>
        </tr>
        <tr>
            <td><?= $traducciones["pregunta6"] ?></td>
            <td><?= $r6 ?></td>
        </tr>
        <tr>
            <td><?= $traducciones["pregunta7"] ?></td>
            <td><?= $r7 ?></td>
        </tr>
        <tr>
            <td><?= $traducciones["pregunta8"] ?></td>
            <td><?= $r8 ?></td>
        </tr>
        <tr>
            <td><?= $traducciones["pregunta9"] ?></td>
            <td><?= $r9 ?></td>
        </tr>
        <tr>
            <td><?= $traducciones["pregunta10"] ?></td>
            <td><?= $r10 ?></td>
        </tr>
        <tr>
            <th><?= $traducciones["puntuacion"] ?></th>
            <th><?= $nota_final . "/" . $total ?></th>
        </tr>
    </table>
</body>

</html>