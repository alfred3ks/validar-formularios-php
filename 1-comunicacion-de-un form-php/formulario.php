<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>

<body>
  <h1>Hormulario de contacto</h1>
  <h2>Formulario usando metodo GET</h2>
  <form action="valida.php" method="GET">
    <input type="text" name="nombre" id="nombre" />
    <button type="submit" value="Enviar">Enviar Datos</button>
  </form>

  <h2>Formulario usando metodo POST</h2>
  <form action="valida.php" method="POST">
    <input type="text" name="nombre" id="nombre" />
    <button type="submit" value="Enviar">Enviar Datos</button>
  </form>

</body>

</html>