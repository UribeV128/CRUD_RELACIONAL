<?php

include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id'];
    $categoria = $_POST['categoriaP'];
    $sucursal = $_POST['sucursalP'];
    $nom = $_POST['nomP'];
    $cant = $_POST['cantP'];
    $cont = $_POST['contenidoP'];
    $caducidad = $_POST['caducidad'];
    $precio = $_POST['precioP'];

    // Actualizar los datos en la base de datos (debes proporcionar tus propias consultas)
    $consulta = "UPDATE tbl_producto SET id_categoria = '$categoria',id_sucursal = '$sucursal',nomproducto = '$nom',cantidad_producto = '$cant', precio = '$precio', cantidad_encontenido = '$cont', caducidad = '$caducidad' WHERE id_producto = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
