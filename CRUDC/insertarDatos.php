<?php

include "../config/conexion.php";

$nombreC = $_POST['nombreC'];

$sql = "INSERT INTO tbl_sucursal(nombreSucursal)
    VALUES ('$nombreC')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/categorias/index.php");
} else {
    echo "Datos no insertados";
}
