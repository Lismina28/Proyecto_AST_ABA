<?php


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>El único final de la villana es la muerte</title> 
    </head>
    <body>
        <h1>Cuestionario "El unico final de la villana es la muerte"</h1>
      
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

</body>
</html> 