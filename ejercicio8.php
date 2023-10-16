<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<a href="index.php">Volver al inicio</a>
    <div class="IngresoDatos">
      <p> En un almacén se descuenta 20% del precio al cliente si el valor a 
pagarse es mayor a $200. Dado un valor de precio, muestre lo que 
debe pagar el cliente.</p>
<form action="respuesta/respuesta8.php" method="post">
    <label for="precio">Precio del producto:</label>
    <input type="number" id="precio" name="precio">
    <br>
    <input type="submit" value="Calcular">
  </form>
        <br>
    </div>
</body>
</html>