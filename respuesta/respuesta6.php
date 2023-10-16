<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Respuesta 6</title>
  <link rel="stylesheet" href="/css/styleRespuestas.css">
  
</head>
<body class="body">
    <p>RESPUESTA 6</p>
    <a href="/index.php">Volver al inicio</a>
    <section class="respuesta">
<?php
  if (isset($_POST['examen_escrito']) && isset($_POST['lecciones']) && isset($_POST['tareas']) && isset($_POST['practicas_laboratorio'])) {
    $examen_escrito = $_POST['examen_escrito'];
    $lecciones = $_POST['lecciones'];
    $tareas = $_POST['tareas'];
    $practicas_laboratorio = $_POST['practicas_laboratorio'];
    // Calcular la calificación final
    $calificacion_final = $examen_escrito * 0.6 + $lecciones * 0.2 + $tareas * 0.15 + $practicas_laboratorio * 0.05;
    // Mostrar la calificación final
    echo "La calificación final es $calificacion_final.";
  }
  ?>
  </section>
    </body>
</html>