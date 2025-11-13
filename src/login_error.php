<?php

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Enlace para los estilos de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        flex-direction: column;
        position: relative; /* Esto permitirá que los botones estén posicionados en la esquina */
    }

    h1 {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 30px;
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
        width: 40px; /* Tamaño de las banderas */
        height: auto;
        cursor: pointer;
        border-radius: 4px;
        transition: transform 0.2s;
    }

    .language-buttons img:hover {
        transform: scale(1.1); /* Efecto de hover */
    }

    </style>
</head>

<body>
    <!-- Botones de idioma en la esquina superior derecha usando iconos de Flaticon -->
    <div class="language-buttons">
        <!-- Bandera de España (SVG de Flaticon) -->
        <a href="?idioma=en"><img src="https://cdn-icons-png.flaticon.com/512/197/197484.png" alt="English" title="English"></a>
        <!-- Bandera de Reino Unido (SVG de Flaticon) -->
        <a href="?idioma=es"><img src="https://cdn-icons-png.flaticon.com/512/197/197593.png" alt="Español" title="Español"></a>
        <!-- Bandera de Corea (SVG de Flaticon) -->
        <a href="?idioma=ko"><img src="https://cdn-icons-png.flaticon.com/128/5111/5111586.png" alt="Coreano" title="Coreano"></a>
    </div>

    <h1>"titulo_error"</h1>
    <p>"mensaje_error"</p>
    <button style="background-color: blue; color: white; padding: 10px 20px; border-radius: 5px;">
    Botón Estilizado
</button>
    
  
</body>

</html>
