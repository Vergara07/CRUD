<!DOCTYPE html>
<html>
<head>
  <title>Catálogo</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="<?php print RUTA_APP.'/img/favicon.jpg'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php print RUTA_APP.'/css/main.css'; ?>">
  <style>
    body {
      background-image: url('https://wallpapercave.com/wp/wp8220651.png'); /* Imagen de fondo */
      background-size: cover; /* Cubrir toda la pantalla */
      background-position: center; /* Centrar la imagen */
      background-attachment: fixed; /* Fija la imagen de fondo */
      background-repeat: no-repeat; /* No repetir la imagen */
      color: white; /* Color del texto */
      font-family: times, sans-serif; /* Fuente del texto */
      margin: 50; /* Sin margen */
      padding: 0; /* Sin padding */
      text-align: center; /* Centrar el texto */
    }

    table {
      margin: 10px auto; /* Centrar la tabla */
      background-color: rgba(0, 0, 0, 0.5); /* Fondo semi-transparente negro para la tabla */
      border-collapse: collapse; /* Colapsar bordes */
      width: 80%; /* Ancho de la tabla */
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra alrededor de la tabla */
    }

    th, td {
      padding: 10px; /* Padding para las celdas */
      border: 1px solid white; /* Bordes de las celdas */
      background-color: rgba(0 ,0 ,0 , 1); /* Color de fondo uniforme para todas las celdas */
    }
    h1 {
  background-color: rgba(0, 0, 0, 0.6); /* Fondo semi-transparente */
  color: white; /* Letras blancas */
  margin: 0 auto; /* Centrar horizontalmente */
  font-size: 2.6em; /* Tamaño del texto */
  margin-bottom: 30px; /* Espacio debajo del título */
  padding: 15px 20px; /* Espaciado interno */
  border-radius: 10px; /* Bordes redondeados */
  display: inline-block; /* Ajustar el tamaño al contenido */
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5); /* Sombra para resaltar */
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

    th {
      background-color: rgba(0, 0, 0, 1); /* Fondo semitransparente para las cabeceras */
    }

    a {
      background-color: #008080; /* Color del botón */
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      display: inline-block;
      margin-top: 20px; /* Espacio arriba del enlace */
    }

    a:hover {
      background-color: #005757; /* Color al pasar el mouse */
    }
  </style>
</head>
<body>
  <h1>Lista de Productos</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>MARCA</th>
        <th>MODELO</th>
        <th>TALLA</th>
        <th>ACTUALIZAR</th>
        <th>ELIMINAR</th>
      </tr>
    </thead>
    <tbody>
      <?php
      for ($i = 0; $i < count($data); $i++) { 
        print "<tr>";
        print "<td>".$data[$i]["id"]."</td>";
        print "<td>".$data[$i]["titulo"]."</td>";
        print "<td>".$data[$i]["autor"]."</td>";
        print "<td>".$data[$i]["editorial"]."</td>";
        print "<td><a href='".RUTA_APP."libros/modificar/".$data[$i]["id"]."'>Modificar</a></td>";
        print "<td><a href='".RUTA_APP."libros/borrar/".$data[$i]["id"]."'>Borrar</a></td>";
        print "</tr>";
      }
      ?>
    </tbody>
  </table>
  <a href='<?php print RUTA_APP."libros/alta/"; ?>'>Producto nuevo</a>
</body>
</html>
