<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Respuesta 7</title>
  <link rel="stylesheet" href="/css/styleRespuestas.css">
  </head>
  <body class="body">
      <p>RESPUESTA 7</p>
      <a href="/index.php">Volver al inicio</a>
      <section class="respuesta">
<?php
// Obtener los valores del formulario
$presion = $_POST['presion'];
$volumen = $_POST['volumen'];
$temperatura = $_POST['temperatura'];
// Calcular la masa de aire
$masa = ($presion * $volumen) / (0.37 * ($temperatura + 460));
// Mostrar el resultado
echo "La masa de aire del neumático es $masa gramos.";
?>
</section>
    </body>
</html>