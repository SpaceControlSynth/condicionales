<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<a href="index.php">Volver al inicio</a>
    <div class="IngresoDatos">
      <p> La presión, el volumen y la temperatura de una masa de aire se relacionan 
por la fórmula
masa = (presión * volumen)/(0.37 * (temperatura + 460))
Calcular la masa de aire de un neumático de un vehículo que está en 
revisión en un servicio de alineación y balanceo.</p>
<form action="/respuesta/respuesta7.php" method="post">
    <label for="presion">Presión (psi):</label>
    <input type="number" id="presion" name="presion">
    <br>
    <label for="volumen">Volumen (litros):</label>
    <input type="number" id="volumen" name="volumen">
    <br>
    <label for="temperatura">Temperatura (°F):</label>
    <input type="number" id="temperatura" name="temperatura">
    <br>
    <input type="submit" value="Calcular">
  </form>
        <br>
    </div>
</body>
</html>