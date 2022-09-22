<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Formulario de contacto</title>
  <?php


  if (isset($_POST["bandera"])) {
    $nombre = $_POST["nombre"];
    $clave = $_POST["clave"];
    $comentarios = $_POST["comentarios"];
    $idioma = $_POST["idioma"];
    $estado = $_POST["estado"];
    $pasatiempos = $_POST["pasatiempos"];
    $pasteles = $_POST["pasteles"];

    $error = array(); // Variable de error.

    if ($nombre == "") {
      $error[0] = "Error: El nombre del usuario no puede estar vacio";
      // array_push($error, "Error: El nombre del usuario no puede estar vacio");
    }
    if ($clave == "") {
      $error[1] = "Error: La clave de acceso del usuario no puede estar vacia.";
      // array_push($error, "Error: La clave de acceso del usuario no puede estar vacia.");
    }
    if ($comentarios == "") {
      $error[2] = "Error: Los comentario del usuario no puede estar vacio.";
      // array_push($error, "Error: Los comentario del usuario no puede estar vacio.");
    }
    if ($idioma == "") {
      $error[3] = "Error: El idioma del usuario no puede estar vacio.";
      // array_push($error, "Error: El idioma del usuario no puede estar vacio.");
    }
    if ($estado == "") {
      $error[4] = "Error: El estado civil del usuario no puede estar vacio.";
      // array_push($error, "Error: El estado civil del usuario no puede estar vacio.");
    }
    // Doble validacion, primero que exista y luego que sea diferente de cero
    if (isset($pasatiempos)) {
      if (count($pasatiempos) == 0) {
        $error[5] = "Error: Debes seleccionar al menos un pasatiempo.";
        // array_push($error, "Error: Debes seleccionar al menos un pasatiempo.");
      }
    } else {
      $error[6] = "Error: Debes seleccionar al menos un pasatiempo.";
      // array_push($error, "Error: Debes seleccionar al menos un pasatiempo.");
    }

    if (isset($pasteles)) {
      if (count($pasteles) == 0) {
        $error[7] = "Error: Debes seleccionar al menos un sabor de pastel.";
        // array_push($error, "Error: Debes seleccionar al menos un sabor de pastel.");
      }
    } else {
      $error[8] = "Error: Debes seleccionar al menos un sabor de pastel.";
      // array_push($error, "Error: Debes seleccionar al menos un sabor de pastel.");
    }
  }
  ?>
</head>

<body>
  <?php
  // Zona para los errores: OJO AQui nos dio muchos problemas las condiciones:
  if (is_countable($error) && count($error) == 0 && isset($_POST["bandera"])) {
    print "<h1>Bienvenido: " . $nombre . " a nuestra página.</h1>";
    echo "<h3>Tus datos son los siguiente:</h3>";
    print "<p>Clave de usuario: " . $clave . "</p>";
    print "<p>Comentarios: " . $comentarios . "</p>";
    print "<p>Estado civil: " . $estado . "</p>";
    print "<p>Idioma que maneja: " . $idioma . "</p>";

    print "<p>Numero de pasatiempos: " . count($pasatiempos) . "</p>";
    print "<ul>";
    foreach ($pasatiempos as $key => $value) {
      print "<li>" . $value . "</li>";
    }
    print "</ul>";
    print "<p>Le gustan los pasteles: " . count($pasteles) . "</p>";
    print "<ul>";
    foreach ($pasteles as $key => $value) {
      print "<li>" . $value . "</li>";
    }
    print "</ul>";
  } else {
    // Nos muestra el formulario:
  ?>
    <h1>Formulario</h1>
    <form action="formularioBis.php" method="POST">
      <label for="nombre">* Nombre:</label><br>
      <input type="text" name="nombre" id="nombre" /><br>
      <?php
      if (isset($error[0])) {
        print "<p class='error'>" . $error[0] . "</p>";
      }
      ?>
      <label for="clave">* Clave:</label><br>
      <input type="password" name="clave" id="clave" /><br>
      <?php
      if (isset($error[1])) {
        print "<p class='error'>" . $error[1] . "</p>";
      }
      ?>
      <label for="comentarios"> * Comentarios:</label><br>
      <textarea id="comentarios" name="comentarios"></textarea><br><br>
      <?php
      if (isset($error[2])) {
        print "<p class='error'>" . $error[2] . "</p>";
      }
      ?>
      <label for="idioma">* Idioma:</label><br>
      <select id="idioma" name="idioma">
        <option value="Español">Español</option>
        <option value="Ingles">Inglés</option>
        <option value="Frances">Francés</option>
      </select><br><br>
      <?php
      if (isset($error[3])) {
        print "<p class='error'>" . $error[3] . "</p>";
      }
      ?>
      <label for="estado">* Estado:</label><br>
      <input type="radio" name="estado" id="soltero" value="soltero">
      <label for="soltero">Soltero</label><br>
      <input type="radio" name="estado" id="casado" value="casado">
      <label for="casado">Casado</label><br>
      <input type="radio" name="estado" id="viudo" value="viudo">
      <label for="viudo">Viudo</label><br><br>
      <?php
      if (isset($error[4])) {
        print "<p class='error'>" . $error[4] . "</p>";
      }
      ?>
      <label>* Pasatiempos:</label><br>
      <label>
        <input type="checkbox" name="pasatiempos[]" value="leer" id="leer">
        Leer
      </label><br>
      <label>
        <input type="checkbox" name="pasatiempos[]" value="dormir" id="dormir">
        Dormir
      </label><br>
      <label>
        <input type="checkbox" name="pasatiempos[]" value="ajedrez" id="ajedrez">
        Ajedrez
      </label><br><br>
      <?php
      if (isset($error[5])) {
        print "<p class='error'>" . $error[5] . "</p>";
      }
      if (isset($error[6])) {
        print "<p class='error'>" . $error[6] . "</p>";
      }
      ?>
      <label for="pasteles">* Sabor de pasteles preferidos:</label><br>
      <select multiple="multiple" name="pasteles[]" id="pasteles">
        <option value="chocolate">Chocolate</option>
        <option value="fresa">Fresa</option>
        <option value="vainilla">Vainilla</option>
        <option value="coco">Coco</option>
        <option value="napolitano">Napolitano</option>
      </select><br>
      <?php
      if (isset($error[7])) {
        print "<p class='error'>" . $error[5] . "</p>";
      }
      if (isset($error[8])) {
        print "<p class='error'>" . $error[6] . "</p>";
      }
      ?>
      <!-- Aqui enviamos la bandera del formulario, oculta al usuario -->
      <input type="hidden" name="bandera" id="bandera" value="bandera">
      <input type="submit" value="Enviar datos" />
    </form>
  <?php
  }
  ?>
</body>

</html>