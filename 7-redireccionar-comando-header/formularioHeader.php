<?php

// Al hacer click redirigira a una imagen.

if (isset($_GET['quien'])) {

  $quien = $_GET['quien']; // Lo muestra en la url

  // Asi redirigimos:
  if ($quien == "perro") {
    header("location: formPerro.php"); // esto tambien puede ser una url externa
  } else {
    header("location: formGato.php");
  }
}





?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario con Header</title>
</head>

<body>
  <h1>Formulario header</h1>
  <form action="formularioHeader.php" method="GET">
    <label for="">¿Que soy?</label>
    <input type="radio" name="quien" value="perro" id="perro">
    <label for="perro">Perro</label>
    <input type="radio" name="quien" value="gato" id="gato">
    <label for="gato">Gato</label><br>
    <input type="submit" value="Enviar">
  </form>
</body>

</html>