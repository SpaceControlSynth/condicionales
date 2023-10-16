<!DOCTYPE html>
<html>
<head>
  <title>Ejercicio 2</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<a href="index.php">Volver al inicio</a>
<p>Pida al usuario tres números y escríbalos en forma ascendente y luego en 
forma descendente.</p>
    <div class="ingresodatos2">
        <form action="/respuesta/respuesta2.php" method="post">
            <label for="num1">Primer número:</label>
            <input type="number" id="num1" name="num1">
            <br>
            <label for="num2">Segundo número:</label>
            <input type="number" id="num2" name="num2">
            <br>
            <label for="num3">Tercer número:</label>
            <input type="number" id="num3" name="num3">
            <br>
            <br>
            <input type="submit" value="Enviar">
            <br>
        </form>
            <br>
    </div>
</body>
</html>