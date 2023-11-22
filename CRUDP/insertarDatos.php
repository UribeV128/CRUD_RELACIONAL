<?php

include "../config/conexion.php";
$categoria = $_POST['categoriaP'];
$sucursal = $_POST['sucursalP'];
$nomP = $_POST['nomP'];
$cantP = $_POST['cantP'];
$contenido = $_POST['contenidoP'];
$caducidad = $_POST['caducidad'];
$precio = $_POST['precioP'];

$sql = "INSERT INTO tbl_producto(id_categoria,id_sucursal,nomproducto,cantidad_producto,precio,cantidad_encontenido,caducidad)
    VALUES ('$categoria','$sucursal','$nomP','$cantP','$precio','$contenido','$caducidad')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/productos/index.php");
} else {
    echo "Datos no insertados";
}
