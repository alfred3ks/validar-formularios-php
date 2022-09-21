<?php
// Vamos a validar los datos que vienen del formulario:

$nombre = $_POST["nombre"];
$clave = $_POST["clave"];
$comentarios = $_POST["comentarios"];
$idioma = $_POST["idioma"];
$estado = $_POST["estado"];

print "<h1>Bienvenido:       " . $nombre . " a nuestra página.</h1>";
echo "<h3>Tus datos son los siguiente:</h3>";
print "<p>Clave de usuario:  " . $clave . "</p>";
print "<p>Comentarios:       " . $comentarios . "</p>";
print "<p>Estado civil:      " . $estado . "</p>";
print "<p>Idioma que maneja: " . $idioma . "</p>";
