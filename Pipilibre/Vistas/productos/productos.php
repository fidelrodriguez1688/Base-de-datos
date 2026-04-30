<?php
session_start();
// conexion
include("../../metodos/conexion.php");
// agarra variables del form
$nombre_producto = $_POST['Nombre_producto']; 
$descripcion_producto = $_POST['descripcion'];
$precio_producto = $_POST['precio'];
$stock_producto = $_POST['stock'];
move_uploaded_file($_FILES['imagen_producto']['tmp_name'], $_FILES['imagen_producto']['name']);
$Nombre_imagenes = $_FILES['imagen_producto']['name'];
// la madafakin consulta para ingresar los datos

$sql = "INSERT INTO publicacion (Nombre_Producto, descripcion, precio, stock) VALUES ('$nombre_producto', '$descripcion_producto', '$precio_producto','$stock_producto')";
echo $Nombre_imagenes;
if (mysqli_query($conexion, $sql)) {

    exit();
} else {
        echo "Error: " . mysqli_error($conexion);
    exit();
}   
// no se que cierra pero cierra algo
mysqli_close($conexion);
?>