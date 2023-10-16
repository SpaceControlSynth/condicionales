<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Respuesta 5</title>
  <link rel="stylesheet" href="/css/styleRespuestas.css">
</head>
<body class="body">
    <p>RESPUESTA 5</p>
    <a href="/index.php">Volver al inicio</a>
    <section class="respuesta">

<?php
  if (isset($_POST['interruptor1']) && isset($_POST['interruptor2']) && isset($_POST['interruptor3'])) {
    $interruptor1 = $_POST['interruptor1'];
    $interruptor2 = $_POST['interruptor2'];
    $interruptor3 = $_POST['interruptor3'];
    // Comprobar si el equipo funcionará
    if ($interruptor1 + $interruptor2 + $interruptor3 >= 2) {
      echo "El equipo funcionará.";
    } else {
      echo "El equipo no funcionará.";
    }
  }
  ?>
</section>
  </body>
</html>