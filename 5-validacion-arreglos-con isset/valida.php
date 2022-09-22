<?php

$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$comentarios = $_POST["comentarios"];
$idioma = $_POST["idioma"];
$estado = $_POST["estado"];
$pasatiempos = $_POST["pasatiempos"];
$pasteles = $_POST["pasteles"];

$error = array(); // Variable de error.

if ($nombre == "") {
  array_push($error, "Error: El nombre del usuario no puede estar vacio");
}
if ($clave == "") {
  array_push($error, "Error: La clave de acceso del usuario no puede estar vacia.");
}
if ($comentarios == "") {
  array_push($error, "Error: Los comentario del usuario no puede estar vacio.");
}
if ($idioma == "") {
  array_push($error, "Error: El idioma del usuario no puede estar vacio.");
}
if ($estado == "") {
  array_push($error, "Error: El estado civil del usuario no puede estar vacio.");
}

// Iteramos el array del error:
if (count($error) > 0) {
  print "<ul>";
  foreach ($error as $key => $value) {
    print "<li>" . $value . "</li>";
  }
  "</ul>";
} else {
  // Hacemos las operaciones:
  print "<h1>Bienvenido:       "           . $nombre . " a nuestra página.</h1>";
  echo "<h3>Tus datos son los siguiente:</h3>";
  print "<p>Clave de usuario:            " . $clave . "</p>";
  print "<p>Comentarios:                 " . $comentarios . "</p>";
  print "<p>Estado civil:                " . $estado . "</p>";
  print "<p>Idioma que maneja:           " . $idioma . "</p>";

  print "<p>Numero de pasatiempos:       " . count($pasatiempos) . "</p>";
  print "<ul>";
  foreach ($pasatiempos as $key => $value) {
    print "<li>" . $value . "</li>";
  }
  print "</ul>";

  print "<p>Le gustan los pasteles:       " . count($pasteles) . "</p>";
  print "<ul>";
  foreach ($pasteles as $key => $value) {
    print "<li>" . $value . "</li>";
  }
  print "</ul>";
}
