<?php

include "../config/conexion.php";

$nombreC = $_POST['nombreC'];

$sql = "INSERT INTO tbl_categoria(nombreCategoria)
    VALUES ('$nombreC')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/marcas/index.php");
} else {
    echo "Datos no insertados";
}
