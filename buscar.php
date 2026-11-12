
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de búsqueda | AuraSkin</title>

    <!-- Hoja de estilos del sitio -->
    <link rel="stylesheet" href="css/style.css?v=14">

    <!-- Tipografía utilizada en AuraSkin -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>

    <!-- Encabezado principal del sitio -->
    <header class="header-principal">

        <a href="index.html" class="logo-link">
            <img src="img/LOGONUEVOAURA.png" alt="AuraSkin" class="logo">
        </a>

        <!-- Formulario de búsqueda de productos -->
        <div class="buscador-header">
            <form action="buscar.php" method="GET">
                <input type="text" name="busqueda" placeholder="Buscar productos..." required>
                <button type="submit">BUSCAR</button>
            </form>
        </div>

        <!-- Menú de navegación -->
        <nav class="menu-principal">
            <ul>
                <li><a href="index.html">SERUMS</a></li>
                <li><a href="Reseñas.html">RESEÑAS</a></li>
                <li><a href="Conocenos.html">CONÓCENOS</a></li>
                <li><a href="Contacto.html">CONTACTO</a></li>
            </ul>
        </nav>

    </header>

<?php

// Establece la conexión con la base de datos AuraSkin.
$conexion = mysqli_connect("localhost", "root", "", "auraskin");

// Verifica que la conexión con MySQL se haya realizado correctamente.
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Recibe el término ingresado en el buscador y lo convierte a minúsculas.
$busqueda = strtolower(trim($_GET["busqueda"]));

// Ajusta algunos términos de búsqueda para encontrar los productos.
if ($busqueda == "serums") {
    $busqueda = "serum";
}

if ($busqueda == "cremas") {
    $busqueda = "crema";
}

// Consulta los productos que coincidan con el nombre o la categoría buscada.
$sql = "SELECT * FROM productos
        WHERE nombre LIKE '%$busqueda%'
        OR categoria LIKE '%$busqueda%'";

// Ejecuta la consulta SQL.
$resultado = mysqli_query($conexion, $sql);

// Muestra el título de los resultados de búsqueda.
echo "<h1 class='titulo-resultados'>" . strtoupper($busqueda) . "S</h1>";

// Verifica si se encontraron productos.
if (mysqli_num_rows($resultado) > 0) {

    // Crea el contenedor de los productos encontrados.
    echo "<div class='resultados-productos'>";

    // Recorre los resultados y muestra la información de cada producto.
    while ($producto = mysqli_fetch_assoc($resultado)) {

        echo "<div class='producto-resultado'>";
        echo "<img src='img/" . $producto["imagen"] . "'>";
        echo "<h2>" . $producto["nombre"] . "</h2>";
        echo "<p>" . $producto["categoria"] . "</p>";
        echo "<p class='precio-resultado'>$" . $producto["precio"] . "</p>";
        echo "</div>";

    }

    echo "</div>";

} else {

    // Muestra un mensaje cuando no existen productos coincidentes.
    echo "<p class='sin-resultados'>No se encontraron productos.</p>";

}

// Cierra la conexión con la base de datos.
mysqli_close($conexion);

?>

    <!-- Pie de página del sitio -->
    <footer class="footer">
        <div class="redes-sociales">
            <img src="img/instagram (3).png" alt="Facebook"></a>
            <img src="img/whatsapp (1).png" alt="Twitter"></a>
            <img src="img/tik-tok (3).png" alt="Instagram"></a>
        </div>
        <p>&copy; 2024 Tu Empresa | Todos los derechos reservados</p>
    </footer>

</body>
</html>
