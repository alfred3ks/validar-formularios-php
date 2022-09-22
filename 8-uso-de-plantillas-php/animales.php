<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Plantilla animales</title>

  <?php
  if (isset($_GET['animal'])) {
    $animal = $_GET['animal'];

    if ($animal == 1) {
      $titulo = "Soy un Perro";
      $imagen = "perro.png";
    }
    if ($animal == 2) {
      $titulo = "Soy un Gato";
      $imagen = "gato.png";
    }
    if ($animal == 3) {
      $titulo = "Soy un Gallo";
      $imagen = "gallo.png";
    }
    if ($animal == 4) {
      $titulo = "Soy un Aguila";
      $imagen = "aguila.png";
    }
  }
  ?>

</head>

<body>
  <h1>Soy un <?php echo $titulo; ?></h1>
  <img src="<?php echo 'img/' . $imagen ?>" alt="<?php echo $titulo ?>">
</body>

</html>