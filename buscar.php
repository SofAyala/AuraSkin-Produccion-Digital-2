<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de búsqueda | AuraSkin</title>

    <link rel="stylesheet" href="css/style.css?v=10">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>

    <header class="header-principal">

    <a href="index.html" class="logo-link">
        <img src="img/LOGOAURA.png" alt="AuraSkin" class="logo">
    </a>

    <div class="buscador-header">
    <form action="buscar.php" method="GET">
        <input type="text" name="busqueda" placeholder="Buscar productos..." required>
        <button type="submit">BUSCAR</button>
    </form>
</div>


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

$conexion = mysqli_connect("localhost", "root", "", "auraskin");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$busqueda = strtolower(trim($_GET["busqueda"]));

if ($busqueda == "serums") {
    $busqueda = "serum";
}

if ($busqueda == "cremas") {
    $busqueda = "crema";
}

$sql = "SELECT * FROM productos 
        WHERE nombre LIKE '%$busqueda%' 
        OR categoria LIKE '%$busqueda%'";

$resultado = mysqli_query($conexion, $sql);

echo "<h1 class='titulo-resultados'>" . strtoupper($busqueda) . "S</h1>";

if (mysqli_num_rows($resultado) > 0) {

    echo "<div class='resultados-productos'>";

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

    echo "<p class='sin-resultados'>No se encontraron productos.</p>";

}

mysqli_close($conexion);
?>
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
     