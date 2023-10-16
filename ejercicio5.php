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
      <p> En un circuito eléctrico hay tres interruptores, los cuales pueden estar en 
estado cerrado(1) o abierto(0).
Para que un equipo funcione, se requiere que al menos dos estén 
cerrados. Si los datos son el estado de los interruptores, determine si el 
equipo funcionará.</p>
<form action="/respuesta/respuesta5.php" method="post">
    <label for="interruptor1">Interruptor 1:</label>
    <input type="number" name="interruptor1" id="interruptor1">
    <br>
    <label for="interruptor2">Interruptor 2:</label>
    <input type="number" name="interruptor2" id="interruptor2">
    <br>
    <label for="interruptor3">Interruptor 3:</label>
    <input type="number" name="interruptor3" id="interruptor3">
    <br>
    <input type="submit" value="Comprobar">
  </form>
        <br>

    </div>
</body>
</html>