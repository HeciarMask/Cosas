<header>
    Usuario:
    <?php
    echo $_SESSION['usuario'];
    echo " -- Correo: " . $_SESSION['correo'];
    ?>

    <a href="admin.php">Ver Clientes</a>
    <a href="admCategorias.php">Insertar Categorias</a>
    <a href="admProductos.php">Insertar Productos</a>
    <a href="logout.php">Cerrar sesión</a>
    <?php
    if (isset($_SESSION["realizado"])) {
        echo "<p>" . $_SESSION["realizado"] . "</p>";
        unset($_SESSION["realizado"]);
    }
    ?>
</header>
<hr>