<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>información</title>
  <link rel="stylesheet" type="text/css" href="estilo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* CSS adicional */
    body {
      font-family: times, sans-serif;
      background-color: #f0f2f5;
    }
    .container {
      background-color: #ffffff;
      padding: 20px;
      border-radius: 8px;
      margin-top: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    h1, h3, h2 {
      color: #333;
    }
    p, ol, h5 {
      color: #555;
    }
    .relleno, .relleno2 {
      background-color: #f8f9fa;
      padding: 15px;
      border-radius: 5px;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
    }
    .image-box {
      border: 2px solid #ddd;
      padding: 10px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      text-align: center;
      background-color: #ffffff;
      margin-top: 20px;
    }
    .image-box img {
      max-width: 100%;
      height: auto;
      border-radius: 8px;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Mi Proyecto</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="sobremi">Sobre mí</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <!-- Introducción al Proyecto -->
    <h1><strong>Proyecto CRUD</strong></h1>
    <p>Este proyecto tiene como objetivo implementar un sistema CRUD que utiliza un patrón de diseño arquitectónico por capas para administrar un catálogo de registros en una base de datos relacional. El sistema es un ejemplo de cómo organizar y estructurar un proyecto de software de forma modular y escalable.</p>

    <!-- Características del CRUD -->
    <div class="row">
      <div class="col-md-6">
        <h3>Características del CRUD</h3>
        <p>El sistema permite realizar las operaciones básicas de:</p>
        <ol>
          <li><strong>Crear</strong> nuevos registros en la base de datos.</li>
          <li><strong>Leer</strong> registros existentes y mostrar su información en pantalla.</li>
          <li><strong>Actualizar</strong> la información de registros específicos.</li>
          <li><strong>Eliminar</strong> registros de la base de datos.</li>
        </ol>
      </div>

      <!-- Tecnologías Utilizadas -->
      <div class="col-md-6 relleno">
        <h3>Tecnologías Utilizadas</h3>
        <ul>
          <li><strong>PHP</strong> para la lógica del servidor.</li>
          <li><strong>MySQL</strong> como sistema de gestión de base de datos.</li>
          <li><strong>Bootstrap</strong> para el diseño y estilo de la interfaz de usuario.</li>
          <li><strong>JavaScript & jQuery</strong> para funcionalidades dinámicas.</li>
        </ul>
      </div>
    </div>

    <!-- Diagrama de Arquitectura -->
    <div class="row">
  <div class="col-md-12 image-box">
    <h3>Diagrama de Arquitectura del Proyecto</h3>
    <img src="https://i.ytimg.com/vi/G5Qq5fYPpiY/maxresdefault.jpg" alt="Diagrama de Arquitectura del Proyecto" width="400" height="250">
    <p>Este diagrama muestra cómo se estructura el proyecto en capas, incluyendo la capa de presentación, la capa de lógica de negocio y la capa de datos.</p>
  </div>
</div>


    <!-- Guía de Uso -->
    <div class="row">
      <div class="col-md-12 relleno2">
        <h2>Guía de Uso</h2>
        <p>Para utilizar este proyecto, sigue estos pasos:</p>
        <ol>
          <li>Clona el repositorio o descarga los archivos en tu entorno de desarrollo.</li>
          <li>Instala el proyecto en el directorio <strong>htdocs</strong> de tu servidor local (XAMPP).</li>
          <li>Crea una base de datos en phpMyAdmin llamada <i>libreria</i> e importa el archivo <i>libros.sql</i>.</li>
          <li>Accede al sistema en tu navegador escribiendo <strong>http://localhost/CRUD_LeeMe/</strong>.</li>
        </ol>
      </div>
    </div>

    <!-- Licencia y Créditos -->
    <div class="row">
      <div class="col-md-12">
        <h3>Licencia y Créditos</h3>
        <p>Este proyecto está Desarrollado por Francisco Velasco Vergara, estudiante de Ingeniería de Software. Agradecimientos especiales a los colaboradores y recursos utilizados en el desarrollo de este proyecto.</p>
      </div>
    </div>
  </div>
</body>
</html>
