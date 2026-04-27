<?php
session_start();
// conexion
include("../../metodos/conexion.php");
// agarra variables del form
$nombre_producto = $_POST['Nombre_producto']; 
$descripcion_producto = $_POST['descripcion'];
$precio_producto = $_POST['precio'];
$stock_producto = $_POST['stock'];

// la madafakin consulta para ingresar los datos
$sql = "INSERT INTO publicacion (Nombre_Producto, descripcion, precio, stock) VALUES ('$nombre_producto', '$descripcion_producto', '$precio_producto','$stock_producto')";

if (mysqli_query($conexion, $sql)) {
    // CAMBIO: Se cambió exist por header("Location: ...")
    header("Location: ../principal/principal.php");
    exit();
} else {
    // CAMBIO: Se agregó "Location: " que faltaba
    header("Location: ../principal/principal.php");
    exit();
}   
// no se que cierra pero cierra algo
mysqli_close($conexion);
?>