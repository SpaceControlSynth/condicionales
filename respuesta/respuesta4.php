<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/styleRespuestas.css">
</head>
<body class="body">
    <p>RESPUESTA 4</p>
    <a href="/index.php">Volver al inicio</a>
    <section class="respuesta">
<?php
if (isset($_POST['largo']) && isset($_POST['ancho'])) {
    $largo = $_POST['largo'];
    $ancho = $_POST['ancho'];
    // Calcular el perímetro del campo
    $perimetro = 2 * $largo + 2 * $ancho;
    // Calcular la cantidad de alambre necesaria
    $alambre = $perimetro * 5;
    // Calcular la cantidad de soja esperada
    $soja = $largo * $ancho * 145;
    // Mostrar los resultados
    echo "Se necesitan $alambre metros de alambre para cercar el campo.<br>";
    echo "Se espera obtener $soja quintales de soja.";
    }
?>
</body>
</html>