<?php
include_once("../../config/conexion.php")
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">PRODUCTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categorias/index.php">SUCURSALES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/marcas/index.php">CATEGORIAS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">REGISTRAR PRODUCTO</h5>
                        <form action="../../CRUDP/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="categoriaP" class="form-label">Categorias</label>
                                <select class="form-select form-select-lg" name="categoriaP" id="categoriaP" required>
                                    <option selected disabled>Seleccione una categoria</option>
                                    <?php
                                    include "../../config/conexion.php";

                                    $sql = $conexion->query("SELECT * FROM tbl_categoria");
                                    while ($resultado = $sql->fetch_assoc()) {
                                        echo "<option value='" . $resultado['idCategoria'] . "'>" . $resultado['nombreCategoria'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="sucursalP" class="form-label">Sucursales</label>
                                <select class="form-select form-select-lg" name="sucursalP" id="sucursalP" required>
                                    <option selected disabled>Seleccione una sucursal</option>
                                    <?php
                                    include "../../config/conexion.php";

                                    $sql = $conexion->query("SELECT * FROM tbl_sucursal");
                                    while ($resultado = $sql->fetch_assoc()) {
                                        echo "<option value='" . $resultado['idSucursal'] . "'>" . $resultado['nombreSucursal'] . "</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nomP" class="form-label">Producto</label>
                                <input type="text" class="form-control" id="nomP" name="nomP" placeholder="Producto" required>
                            </div>
                            <div class="mb-3">
                                <label for="cantP" class="form-label">Cantidad</label>
                                <input type="text" class="form-control" id="cantP" name="cantP" placeholder="Cantidad" required></input>
                            </div>
                            <div class="mb-3">
                                <label for="contenidoP" class="form-label">Contenido</label>
                                <input type="text" class="form-control" name="contenidoP" id="contenidoP" placeholder="Contenido" required>
                            </div>
                                <div class="mb-3">
                                <label for="caducidad" class="form-label">Caducidad</label>
                                <input type="text" class="form-control" name="caducidad" id="caducidad" placeholder="Caducidad" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="precioP" class="form-label">Precio</label>
                                <input type="text" class="form-control" name="precioP" id="precioP" placeholder="Precio" required>
                            </div>
                            
                            <div class="text-center">
                                <a href="../productos/index.php" type="submit" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>