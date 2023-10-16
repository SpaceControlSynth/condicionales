<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<a href="index.php">Volver al inicio</a>
    <div class="IngresoDatos">
      <p>En un almacén se rebaja 10% del precio al cliente si compra mas de 20 
artículos y 5% si compra hasta 20 artículos, pero más de 10. Dado 
el precio unitario de un artículo y la cantidad adquirida, muestre lo que 
debe pagar el cliente.
</p>
<form action="respuesta/respuesta9.php" method="post">
    <label for="precio">Precio unitario del artículo:</label>
    <input type="number" id="precio" name="precio">
    <br>
    <label for="cantidad">Cantidad de artículos adquiridos:</label>
    <input type="number" id="cantidad" name="cantidad">
    <br>
    <input type="submit" value="Calcular">
  </form>
        <br>
    </div>
</body>
</html>