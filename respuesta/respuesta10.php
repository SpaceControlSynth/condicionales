<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/css/styleRespuestas.css">
  </head>
  <body class="body">
      <p>RESPUESTA 10</p>
      <a href="/index.php">Volver al inicio</a>
      <section class="respuesta">
<?php
// Obtener el precio por kilo y el peso en kilos
$precio = $_POST['precio'];
$peso = $_POST['peso'];
// Calcular el descuento
if ($peso <= 2) {
  $descuento = 0;
} elseif ($peso <= 5) {
  $descuento = 0.1;
} elseif ($peso <= 10) {
  $descuento = 0.15;
} else {
  $descuento = 0.2;
}
// Calcular el precio a pagar
$precio_a_pagar = $precio * $peso - $descuento;
// Mostrar el resultado
echo "El precio a pagar es $precio_a_pagar";
?>
</section>
    </body>
</html>