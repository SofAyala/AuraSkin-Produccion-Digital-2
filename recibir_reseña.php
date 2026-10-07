<?php

$conexion = mysqli_connect("localhost", "root", "", "auraskin");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$nombre = $_POST["username"] ?? "";
$puntuacion = $_POST["rating"] ?? "";
$reseña = $_POST["review"] ?? "";

if ($nombre != "" && $puntuacion != "" && $reseña != "") {

    $sql = "INSERT INTO `reseñas` (`nombre`, `puntuación`, `reseña`) 
            VALUES ('$nombre', '$puntuacion', '$reseña')";

    mysqli_query($conexion, $sql);
}

mysqli_close($conexion);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reseña enviada | AuraSkin</title>

    <link rel="stylesheet" href="./css/style.css?v=10">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>

    <header class="header-principal">

        <a href="index.html" class="logo-link">
        <img src="img/LOGOAURA.png" alt="AuraSkin" class="logo">        </a>

        <nav class="menu-principal">
            <ul>
                <li><a href="index.html">SERUMS</a></li>
                <li><a href="Reseñas.html">RESEÑAS</a></li>
                <li><a href="Conocenos.html">CONÓCENOS</a></li>
                <li><a href="Contacto.html">CONTACTO</a></li>
            </ul>
        </nav>

    </header>


    <main class="confirmacion-reseña">

        <span>TU OPINIÓN NOS IMPORTA</span>

        <h1>¡GRACIAS POR TU RESEÑA!</h1>

        <p>
            Tu experiencia fue enviada y guardada correctamente.
            Gracias por compartir tu opinión con AuraSkin.
        </p>

        <a href="Reseñas.html" class="boton-volver">
            VOLVER A RESEÑAS
        </a>

    </main>

</body>

</html>