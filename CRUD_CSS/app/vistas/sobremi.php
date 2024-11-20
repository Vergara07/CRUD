<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí</title>
    <style>
        /* Estilos para centrar el contenido y darle formato */
        body {
            font-family: times, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f9;
        }
        .container {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
        }
        h2 {
            color: #333333;
        }
        p {
            color: #666666;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    // Datos sobre el usuario
    $nombre = "Francisco Velasco Vergara";
    $carrera = "Ingeniería de Software";
    $descripcion = "Soy estudiante de la carrera de Ingeniería de Software. A lo largo de mis estudios, he adquirido conocimientos en desarrollo de software y he realizado proyectos como la implementación de un CRUD (Crear, Leer, Actualizar y Borrar).";

    // Función para mostrar la información "Sobre mí"
    function mostrarSobreMi($nombre, $carrera, $descripcion) {
        echo "<h2>Sobre mí</h2>";
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Carrera:</strong> $carrera</p>";
        echo "<p><strong>Descripción:</strong> $descripcion</p>";
    }

    // Llamada a la función para mostrar la información
    mostrarSobreMi($nombre, $carrera, $descripcion);
    
    ?>
        <!-- Botón para regresar a la página anterior -->
        <button onclick="window.location.href='http://localhost/CRUD_CSS/libros/info'">Regresar</button>
</div>

</body>
</html>
