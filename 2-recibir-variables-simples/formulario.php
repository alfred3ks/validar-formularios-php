<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>

<body>
  <h1>Formulario de contacto</h1>
  <form action="valida.php" method="POST">
    <label for="nombre">Nombre:</label><br>
    <input type="text" name="nombre" id="nombre" /><br>
    <label for="clave">Clave:</label><br>
    <input type="password" name="clave" id="clave" /><br>
    <label for="comentarios">Comentarios:</label><br>
    <textarea id="comentarios" name="comentarios"></textarea><br>
    <label for="idioma">Idioma:</label><br>
    <select id="idioma" name="idioma">
      <option value="es">Español</option>
      <option value="en">Inglés</option>
      <option value="fr">Francés</option>
    </select><br>
    <label for="estado">Estado:</label><br>
    <input type="radio" name="estado" id="soltero" value="soltero">
    <label for="soltero">Soltero</label><br>
    <input type="radio" name="estado" id="casado" value="casado">
    <label for="casado">Casado</label><br>
    <input type="radio" name="estado" id="viudo" value="viudo">
    <label for="viudo">Viudo</label><br>
    <input type="submit" value="Enviar datos" />
  </form>
</body>

</html>