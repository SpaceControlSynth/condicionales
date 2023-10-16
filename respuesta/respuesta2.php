<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta 2</title>
    <link rel="stylesheet" href="/css/styleRespuestas.css">
</head>
<body class="body">
    <p>RESPUESTA 2</p>
    
<a href="/index.php">Volver al inicio</a>
    <section class="respuesta">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtén los números ingresados por el usuario
    $num1 = isset($_POST['num1']) ? $_POST['num1'] : '';
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : '';
    $num3 = isset($_POST['num3']) ? $_POST['num3'] : '';

    // Ordenar los números en forma ascendente y descendente
    $ascendente = [$num1, $num2, $num3];
    sort($ascendente);

    $descendente = [$num1, $num2, $num3];
    rsort($descendente);
    ?>
<?php
    // Mostrar los números ordenados
    echo "Números en forma ascendente: " . implode(", ", $ascendente) . "<br>";
    echo "Números en forma descendente: " . implode(", ", $descendente);
}
?>
</section>
</body>
</html>
