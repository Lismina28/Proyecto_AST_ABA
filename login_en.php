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

    .login-form {
        background-color: white;
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
        <img src="https://cdn-icons-png.flaticon.com/512/197/197484.png" alt="Español" title="Español" onclick="cambiarIdioma('es')">
        <!-- Bandera de Reino Unido (SVG de Flaticon) -->
        <img src="https://cdn-icons-png.flaticon.com/512/197/197593.png" alt="English" title="English" onclick="cambiarIdioma('en')">
    </div>

    <h1>Page title</h1>
    
    <div class="login-form">
        <form action="/login" method="post">
            <input type="text" id="user" name="user" placeholder="User" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
