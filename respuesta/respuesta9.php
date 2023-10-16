<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/css/styleRespuestas.css">
  </head>
  <body class="body">
      <p>RESPUESTA 9</p>
      <a href="/index.php">Volver al inicio</a>
      <section class="respuesta">
<?php
// Obtener el precio unitario del artículo
$precio = $_POST['precio'];
// Obtener la cantidad de artículos adquiridos
$cantidad = $_POST['cantidad'];
// Calcular el descuento
if ($cantidad > 20) {
  $descuento = $precio * 0.1;
} elseif ($cantidad > 10) {
  $descuento = $precio * 0.05;
} else {
  $descuento = 0;
}
// Calcular el precio a pagar
$precio_a_pagar = $precio * $cantidad - $descuento;
// Mostrar el resultado
echo "El precio a pagar es $precio_a_pagar";
?>
</section>
    </body>
</html>