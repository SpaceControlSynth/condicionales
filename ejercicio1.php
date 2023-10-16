<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<a href="index.php">Volver al inicio</a>
    <div class="IngresoDatos">
      <p>Ingrese dos numeros los cuales la super Inteligencia artificial asignara demanera ascendente y descendente.</p>
        <form action="/respuesta/respuesta1.php" method="post" target="ventana">
            <label for="num1">Primer número:</label><br>
            <input type="number" id="num1" name="num1"><br>
            <label for="num2">Segundo número:</label><br>
            <input type="number" id="num2" name="num2"><br><br>
            <input type="submit" value="Enviar">
        </form>
        <br>
        <iframe class="iframe" name="ventana" src="/respuesta/respuesta1.php">
    </div>
</body>
</html>