<!DOCTYPE html>
<html>
<head>
  <title>Modificar</title>
  <meta charset="utf-8">
  <style>
    body {
      background-image: url('https://i.pinimg.com/originals/6a/24/f1/6a24f1006af001ece804ab1332a2109f.jpg'); /* Imagen de fondo */
      background-size: cover;
      background-position: center;
      background-attachment: fixed;  /* Fija la imagen de fondo */
      background-repeat: no-repeat;
      color: white;
      font-family: times, sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center; /* Centra el contenido verticalmente */
      align-items: center; /* Centra el contenido horizontalmente */
      height: 100vh;
      margin: 0;
      padding: 0;
      text-align: center;
    }
    table {
      background-color: rgba(0, 0, 0, 0.8); /* Fondo semi-transparente para el formulario */
      padding: 20px;
      border-radius: 10px;
      width: 300px;
    }
    h1 {
      background-color: rgba(0, 0, 0, 0.8);
      margin: 0; /* Sin margen para el título */
      font-size: 2.8em; /* Aumentar tamaño del título */
      margin-bottom: 50px; /* Ajustar este valor para mover el título más arriba */
      padding-top: -30px; /* Espacio arriba del título */
    }
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    input[type="submit"] {
      background-color: #008080; /* Color del botón */
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      cursor: pointer;
      display: inline-block;
    }
    input[type="submit"]:hover {
      background-color: #808080; /* Color al pasar el mouse */
    }
    .button-container {
      margin-top: 20px; /* Espaciado para el botón "Regresar" */
    }
    .button-container a {
      background-color: #008080; /* Color del botón */
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      cursor: pointer;
      display: inline-block;
    }
    .button-container a:hover {
      background-color: #808080; /* Color al pasar el mouse */
    }
  </style>
</head>
<body>
    <h1>Modificación</h1>
  <form action='<?php print RUTA_APP."libros/modificar/"; ?>' method="POST">
    <table>
      <tr>
        <td><label for="titulo">Marca:</label></td>
        <td><input type="text" name="titulo" value="<?php print $data["titulo"]; ?>"></td>
      </tr>
      <tr>
        <td><label for="autor">Modelo:</label></td>
        <td><input type="text" name="autor" value="<?php print $data["autor"]; ?>"></td>
      </tr>
      <tr>
        <td><label for="editorial">Talla:</label></td>
        <td><input type="text" name="editorial" value="<?php print $data["editorial"]; ?>"></td>
      </tr>
      <tr>
        <td><input type="hidden" value="<?php print $data["id"]; ?>" name="id"></td>
        <td><input type="submit" value="Enviar"></td>
      </tr>
    </table>
  </form>

  <div class="button-container">
    <a href='<?php print RUTA_APP."libros/"; ?>'>Regresar</a> <!-- Botón "Regresar" centrado debajo del contenedor -->
  </div>
</body>
</html>

