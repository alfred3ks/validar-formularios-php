<?php
// Vamos a validar los datos que vienen del formulario:

// $nombre = $_GET["nombre"];
$nombre = $_POST["nombre"];
print "<h1>Bienvenido: " . $nombre . " a nuestra página.</h1>";
echo "<h1>Bienvenido : " . $nombre . " a nuestra página.</h1>";

/*
Vemos la respuesta: GET
http://localhost:88/1-comunicacion-de-un%20form-php/valida.php?nombre=James+Bond

Vemos la salida en url: POST
http://localhost:88/1-comunicacion-de-un%20form-php/valida.php
*/