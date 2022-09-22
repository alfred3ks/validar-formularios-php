<?php
// Vamos a validar los datos que vienen del formulario:

$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$comentarios = $_POST["comentarios"];
$idioma = $_POST["idioma"];
$estado = $_POST["estado"];

// Vemos el nuevo items que trae un array de opciones:
$pasatiempos = $_POST["pasatiempos"];
$pasteles = $_POST["pasteles"];

print "<h1>Bienvenido:       "           . $nombre . " a nuestra página.</h1>";
echo "<h3>Tus datos son los siguiente:</h3>";
print "<p>Clave de usuario:            " . $clave . "</p>";
print "<p>Comentarios:                 " . $comentarios . "</p>";
print "<p>Estado civil:                " . $estado . "</p>";
print "<p>Idioma que maneja:           " . $idioma . "</p>";
print "<p>Numero de pasatiempos:       " . count($pasatiempos) . "</p>";

// Vamos a mostrar los item del array:
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
