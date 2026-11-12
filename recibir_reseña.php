
<?php

// Establece la conexión con la base de datos AuraSkin.
$conexion = mysqli_connect("localhost", "root", "", "auraskin");

// Verifica que la conexión con MySQL sea correcta.
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Recibe los datos enviados desde el formulario de reseñas.
$nombre = $_POST["username"] ?? "";
$puntuacion = $_POST["rating"] ?? "";
$reseña = $_POST["review"] ?? "";

// Comprueba que los campos del formulario no estén vacíos.
if ($nombre != "" && $puntuacion != "" && $reseña != "") {

    // Prepara la instrucción SQL para guardar la reseña.
    $sql = "INSERT INTO `reseñas` (`nombre`, `puntuación`, `reseña`) 
            VALUES ('$nombre', '$puntuacion', '$reseña')";

    // Ejecuta la consulta para almacenar la reseña en MySQL.
    mysqli_query($conexion, $sql);
}

// Cierra la conexión con la base de datos.
mysqli_close($conexion);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reseña enviada | AuraSkin</title>

    <!-- Vincula la hoja de estilos del sitio -->
    <link rel="stylesheet" href="./css/style.css?v=10">

    <!-- Carga la tipografía utilizada en AuraSkin -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Incluye el encabezado y menú de navegación del sitio -->
    <?php
        include ("header.php");
    ?>

    <!-- Sección de confirmación del envío de la reseña -->
    <main class="confirmacion-reseña">

        <span>TU OPINIÓN NOS IMPORTA</span>

        <h1>¡GRACIAS POR TU RESEÑA!</h1>

        <p>
            Tu experiencia fue enviada y guardada correctamente.
            Gracias por compartir tu opinión con AuraSkin.
        </p>

        <!-- Permite regresar al formulario de reseñas -->
        <a href="Reseñas.html" class="boton-volver">
            VOLVER A RESEÑAS
        </a>

    </main>

</body>

</html>
