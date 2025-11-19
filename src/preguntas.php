<?php


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>El único final de la villana es la muerte</title> 
    </head>
    <body>
        <h1>Cuestionario "El unico final de la villana es la muerte"</h1>
      
    <form action="respuestas_Manhwas.php" method="POST">

    

        <h2>Preguntas</h2>

        <!-- 1 -->
        <p>1. ¿De qué país proviene este manhwa?</p>
        <input type="radio" name la protagonist="pregunta1" value="corea">Corea<br>
        <input type="radio" name="pregunta1" value="españa">España<br>
        <input type="radio" name="pregunta1" value="china">China<br>
        <input type="radio" name="pregunta1" value="japón">Japón<br>

        <!-- 2 -->
        <p>2. ¿Qué género describe mejor la obra?</p>
        <select name="pregunta2">
            <option>-Seleccionar-</option>
            <option value="romance">Romance</option>
            <option value="fantasia">Fantasia</option>
            <option value="drama">Drama</option>
            <option value="accion">Acción</option>
        </select>

        <!-- 3 -->
        <p>3. ¿Quién es la protagonista?</p>
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
        <p>7. ¿Cómo se llama la protagonista de “La emperatriz divorciada”?</p>
        <input type="text" name="pregunta7">

        <!-- 8 -->
        <p>8. ¿Cuál es el nombre del emperador en “La emperatriz divorciada”?</p>
        <input type="radio" name="pregunta8" value="Sovieshu"> Sovieshu<br>
        <input type="radio" name="pregunta8" value="Claude"> Claude<br>
        <input type="radio" name="pregunta8" value="Rashta"> Rashta<br>

        <!-- 9 -->
        <p>9. ¿En qué plataforma se publican muchos manhwas oficialmente?</p>
        <select name="pregunta9">
            <option>-Seleccionar-</option>
            <option value="MangaPlus">MangaPlus</option>
            <option value="Webtoon">Webtoon</option>
            <option value="Pixiv">Pixiv</option>
        </select>

        <!-- 10 -->
        <p>10. ¿En qué año comenzó la serie de “La emperatriz divorciada”?</p>
        <input type="number" name="pregunta10">

        <br><br>
        <input type="submit" value="Enviar respuestas">

    </form>

</body>
</html> 