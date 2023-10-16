<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Respuesta 8</title>
  <link rel="stylesheet" href="/css/styleRespuestas.css">
  </head>
  <body class="body">
      <p>RESPUESTA 8</p>
      <a href="/index.php">Volver al inicio</a>
      <section class="respuesta">
<?php
// Obtener el precio del producto
$precio = $_POST['precio'];
// Calcular el descuento
if ($precio > 200) {
  $descuento = $precio * 0.2;
} else {
  $descuento = 0;
}
// Calcular el precio a pagar
$precio_a_pagar = $precio - $descuento;
// Mostrar el resultado
echo "El precio a pagar es $precio_a_pagar";
?>
</section>
    </body>
</html>