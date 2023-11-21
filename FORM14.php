<!DOCTYPE html>
<html>
<head>
    <title> comentario</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="1.css">
</head>

<body>
    <form method="post">
        <h1>Formulario comebtario</h1>

        <input type="int" name="ID" placeholder="num comentario"><br>
        <input type="int" name="num" placeholder="id usuario"><br>
        <input type="date" name="fecha" placeholder="fecha"><br>
        <input type="time" name="hora" placeholder="hora"><br>
        <input type="varchar" name="com" placeholder="comentario"><br>
        <input type="varchar" name="res" placeholder="respuesta"><br>
        <input type="submit" name="register" value="enviar">

    </form>
    <?php
    include("REG1.php");
    ?>
    
   

<button onclick="location.href='tes.php'">Regresar</button>
</body>
</html>

