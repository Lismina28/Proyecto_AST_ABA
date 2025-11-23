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
        echo "<h2 style='color:red;'>Error: Faltan respuestas en alguna pregunta.</h2>";
        echo "<a href='preguntas.php'>Volver al formulario</a>";
        exit;
    }
}

// Pregunta 6, si no hay ninguna opción marcada, redirigir al formulario
if (empty($pregunta6)) {
    echo "<h2 style='color:red;'>Error: Debes marcar al menos una opción en la pregunta 6.</h2>";
    echo "<a href='preguntas.php'>Volver al formulario</a>";
    exit;
}

// Corrección
$contador = 0;
$total = 10;


if ($preguntas[1] == "Reynold y Derrik") { 
    $contador += 1; $r1 = "Correcto"; 
} else { $r1 = "Incorrecto"; 
}

if ($preguntas[2] == "Afecto") {
    $contador += 1; $r2 = "Correcto"; 
} else { $r2 = "Incorrecto"; 
}

if (strtolower(trim($preguntas[3])) == "morir") { 
    $contador += 1; $r3 = "Correcto"; 
} else { $r3 = "Incorrecto"; 
}

if ($preguntas[4] == "Rosado") { 
    $contador += 1; $r4 = "Correcto"; 
} else { $r4 = "Incorrecto"; 
}

if ($preguntas[5] == "Sobrevivir") { 
    $contador += 1; $r5 = "Correcto"; 
} else { $r5 = "Incorrecto"; }

$correctas6 = ["Hermione", "Navier"];
if (array_diff($correctas6, $pregunta6) == [] && count($pregunta6) == count($correctas6)) {
    $contador += 1; 
    $r6 = "Correcto"; 
} else { 
    $r6 = "Incorrecto"; 
}

if (strtolower(trim($preguntas[7])) == "yvonne") { 
    $contador += 1; $r7 = "Correcto"; 
} else { $r7 = "Incorrecto"; 
}

if ($preguntas[8] == "Eclise") { 
    $contador += 1; $r8 = "Correcto"; 
} else { $r8 = "Incorrecto"; 
}

if ($preguntas[9] == "Despierta en el juego") { 
    $contador += 1; $r9 = "Correcto"; 
} else { $r9 = "Incorrecto"; }

if (strtolower(trim($preguntas[10])) == "eclise") { 
    $contador += 1; $r10 = "Correcto"; 
} else { $r10 = "Incorrecto"; 
}


$nota_final = $contador * 1; 

// Mostrar resultados
echo "<h1>{$traducciones["resultados"]}</h1>";
echo "<table border='1' cellpadding='8'>
        <tr>
            <th>{$traducciones["preguntas"]}</th>
            <th>{$traducciones["tu respuesta"]}</th>
            <th>{$traducciones["resultado"]}</th>
        </tr>
         <tr>
            <td>{$traducciones["pregunta1"]}</td>
            <td>{$preguntas[1]}</td>
            <td>$r1</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta2"]}</td>
            <td>{$preguntas[2]}</td>
            <td>$r2</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta3"]}</td>
            <td>{$preguntas[3]}</td>
            <td>$r3</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta4"]}</td>
            <td>{$preguntas[4]}</td>
            <td>$r4</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta5"]}</td>
            <td>{$preguntas[5]}</td>
            <td>$r5</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta6"]}</td>
            <td>".implode(", ", $pregunta6)."</td>
            <td>$r6</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta7"]}</td>
            <td>{$preguntas[7]}</td>
            <td>$r7</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta8"]}</td>
            <td>{$preguntas[8]}</td>
            <td>$r8</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta9"]}</td>
            <td>{$preguntas[9]}</td>
            <td>$r9</td>
        </tr>
        <tr>
            <td>{$traducciones["pregunta10"]}</td>
            <td>{$preguntas[10]}</td>
            <td>$r10</td>
        </tr>
        <tr>
            <th colspan='2'>{$traducciones["puntuacion"]}</th>
            <th>$nota_final / $total</th>
        </tr>
    </table>";