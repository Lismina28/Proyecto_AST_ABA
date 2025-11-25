<?php

session_start();

$idioma = $_GET["idioma"] ?? $_SESSION["idioma"];

$fichero = "$idioma.php";

$_SESSION["idioma"] = $idioma;

require $fichero; //es.php, en.php o ko.php

$modo = "claro";

for ($i = 1; $i <= 10; $i++) {
    $preguntas[$i] = $_POST["pregunta$i"] ?? "";
}

$pregunta6 = $_POST["pregunta6"] ?? []; // checkbox

// Si alguna pregunta está sin responder, redirigir al formulario
for ($i = 1; $i <= 10; $i++) {
    if ($i != 6 && empty($preguntas[$i])) {
        echo "<h2 style='color:red;'>{$traducciones["error"]}</h2>";
        echo "<a href='preguntas.php'>{$traducciones["volver"]}</a>";
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

// Mostrar resultado

echo "<h1>{$traducciones["resultados"]}</h1>";
echo "<table border='1' cellpadding='8'>
        <tr>
            <th>{$traducciones["preguntas"]}</th>
            <th>{$traducciones["resultado"]}</th>
        </tr>
         <tr>
            <td>{$traducciones["pregunta1"]}</td>
            <td>$r1</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta2"]}</td>
            <td>$r2</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta3"]}</td>
            <td>$r3</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta4"]}</td>
            <td>$r4</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta5"]}</td>
            <td>$r5</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta6"]}</td>
            <td>$r6</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta7"]}</td>
            <td>$r7</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta8"]}</td>
            <td>$r8</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta9"]}</td>
            <td>$r9</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta10"]}</td>
            <td>$r10</td>
        </tr>
        <tr>
            <th>{$traducciones["puntuacion"]}</th>
            <th>$nota_final / $total</th>
        </tr>
    </table>";
