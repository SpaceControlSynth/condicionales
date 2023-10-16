<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 3</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<a href="index.php">Volver al inicio</a>
    <p> Con las longitudes de los lados de un triángulo, clasifíquelo como 
equilátero, isósceles o escaleno.</p>
<section class="entradadatos">
<form action="/respuesta/respuesta3.php" method="get">
  <label for="num1">Lado 1:</label><br>
  <input type="number" id="num1" name="num1"><br>
  <label for="num2">Lado 2:</label><br>
  <input type="number" id="num2" name="num2"><br>
  <label for="num3">Lado 3:</label><br>
  <input type="number" id="num3" name="num3"><br><br>
  <input type="submit" value="Clasificar">
</form>
</section>
</body>
</html>