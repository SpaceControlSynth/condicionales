<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 10</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<a href="index.php">Volver al inicio</a>
    <div class="IngresoDatos">
      <p>na frutería ofrece las manzanas con descuento según la siguiente 
tabla:
numero de kilos  comprados -------------%descuento
0-2                                                             0%
2.01-5                                                        10%
5.01-10                                                      15%
10.01 en adelante                                      20%
Dado el precio por kilo, y el peso, determinar cuánto pagará una 
persona que compre manzanas es esa frutería.</p>
<form action="respuesta/respuesta10.php" method="post">
    <label for="precio">Precio por kilo:</label>
    <input type="number" id="precio" name="precio">
    <br>
    <label for="peso">Peso en kilos:</label>
    <input type="number" id="peso" name="peso">
    <br>
    <input type="submit" value="Calcular">
  </form>

        <br>
    </div>
</body>
</html>