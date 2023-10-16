<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionales</title>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<a href="index.php">Volver al inicio</a>
    <div class="IngresoDatos">
      <p>Un alumno desea saber cual será su calificación final en cierta materia. 
Dicha calificación se compone de lo siguiente:
60% corresponde al examen escrito.
20% corresponde a las lecciones
15% corresponde a las tareas.
5% corresponde a las prácticas en el laboratorio
El dato del examen escrito es un valor entre 0 y 100 y los otros datos son 
valores entre 0 y 10. La calificación final debe ser un valor entre 0y 20.</p>
<form action="/respuesta/respuesta6.php" method="post">
    <label for="examen_escrito">Examen escrito:</label>
    <input type="number" name="examen_escrito" id="examen_escrito">
    <br>
    <label for="lecciones">Lecciones:</label>
    <input type="number" name="lecciones" id="lecciones">
    <br>
    <label for="tareas">Tareas:</label>
    <input type="number" name="tareas" id="tareas">
    <br>
    <label for="practicas_laboratorio">Prácticas en el laboratorio:</label>
    <input type="number" name="practicas_laboratorio" id="practicas_laboratorio">
    <br>
    <input type="submit" value="Calcular">
  </form>
        <br>
    </div>
</body>
</html>