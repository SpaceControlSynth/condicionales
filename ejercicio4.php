<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 4</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<a href="index.php">Volver al inicio</a>
    <p>  Desarrollar un programa que dado el largo y el ancho de un campo, 
permita determinar cuántos metros de alambre serán necesarios para 
colocar le al perímetro 5 hilos de alambrado. Y qué cantidad de Soja se 
espera obtener, si el rendimiento de la misma es 145 quintales por 
hectárea.
.</p>
<section class="entradadatos">
<h1>Calculadora de alambre y soja</h1>
    <form action="respuesta/respuesta4.php" method="post">
    <label for="largo">Largo del campo (metros):</label>
    <input type="number" name="largo" id="largo">
    <br>
    <label for="ancho">Ancho del campo (metros):</label>
    <input type="number" name="ancho" id="ancho">
    <br>
    <input type="submit" value="Calcular">
  </form>
</section>
</body>
</html>