
<link rel="stylesheet" href="./css/style.css?v=16">

<?php
// Incluye el encabezado del sitio web
include ("header.php");
?>

<?php
// Establece la conexión con la base de datos AuraSkin
$conexion = new mysqli("localhost", "root", "", "auraskin");

// Verifica que la conexión se haya realizado correctamente
if ($conexion->connect_error) {
    die("Error de conexión con la base de datos.");
}

// Comprueba que los datos se hayan enviado mediante el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recibe los datos del formulario y elimina espacios innecesarios.
    $nombre = trim($_POST["nombre"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $asunto = trim($_POST["asunto"] ?? "");
    $mensaje = trim($_POST["mensaje"] ?? "");

    // Valida que los campos estén completos y el email sea valido
    if ($nombre === "" || $asunto === "" || $mensaje === "" ||
        !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Completá todos los campos correctamente.");
    }

    // Prepara la consulta SQL para guardar el mensaje en la tabla contactos.
    $sql = "INSERT INTO contactos (nombre, email, asunto, mensaje)
            VALUES (?, ?, ?, ?)";

    // Vincula los datos del formulario con la consulta preparada
    $consulta = $conexion->prepare($sql);
    $consulta->bind_param("ssss", $nombre, $email, $asunto, $mensaje);

    // Ejecuta la consulta y muestra un mensaje de confirmación si se guarda correctamente.
    if ($consulta->execute()) {
        echo '
        <section class="confirmacion-contacto">
            <div class="contenido-confirmacion">

                <div class="titulo-confirmacion">
                    <span>ESTAMOS CERCA TUYO</span>
                    <h1>¡GRACIAS POR TU CONSULTA!</h1>
                </div>

                <p>Tu consulta fue enviada y guardada correctamente.
                Gracias por comunicarte con AuraSkin.</p>

                <a href="Contacto.html" class="boton-confirmacion">
                    VOLVER A CONTACTO
                </a>

            </div>
        </section>';

    } else {
        // Muestra un mensaje si ocurre un error al guardar la consulta
        echo "Hubo un error al guardar la consulta.";
    }

    // Cierra la consulta preparada.
    $consulta->close();
}

// Cierra la conexión con la base de datos.
$conexion->close();
?>
