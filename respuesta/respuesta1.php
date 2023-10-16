<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php
// toma los dos numeros de usuario
$num1 = isset($_POST['num1']) ? $_POST['num1'] : '';
$num2 = isset($_POST['num2']) ? $_POST['num2'] : '';
?>

<?php
// los toma de manera ascendente pero el if da el contrario
if ($num1 < $num2) {
  $min = $num1;
  $max = $num2;
} else {
  $min = $num2;
  $max = $num1;
}
?>
<section class="respuesta">
<?php
// Imprime los numero de manera ascendente
echo "Los numeros de manera ascendente son: $min a $max.";
?>
<hr>
<?php
// Imprime los numeros de manera descendente
echo "Los numeros de manera descendente son: $max a $min.";
?>
</section>
</body>
</html>