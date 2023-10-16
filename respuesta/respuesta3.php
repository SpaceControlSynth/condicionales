<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>respuesta 3</title>
    <link rel="stylesheet" href="/css/styleRespuestas.css">
</head>
<body class="body">
    <p>RESPUESTA 3</p>
    
<a href="/index.php">Volver al inicio</a>
    <section class="respuesta">
<?php
    $num1 = isset($_POST['num1']) ? $_POST['num1'] : '';
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : '';
    $num3 = isset($_POST['num3']) ? $_POST['num3'] : '';

if ($num1 == $num2 && $num2 == $num3) {
    echo "El triángulo es equilátero";
} else if ($num1 == $num2 || $num2 == $num3 || $num1 == $num3) {
    echo "El triángulo es isósceles";
} else {
    echo "El triángulo es escaleno";
}
?>
</section>
</body>
</html>