<?php
session_start();
// conexion
include("../../metodos/conexion.php");
// agarra variables del form
$nombre = $_POST['Nombre']; 
$correo = $_POST['correo_electronico'];
$pass = $_POST['contraseña'];
$nombreImagen = $_FILES['imagen_producto']['name'];
$directorioDestino = "../../imagenes\imagenes_productos/" . $nombreImagen;
move_uploaded_file($_FILES['imagen_producto']['tmp_name'], $directorioDestino);
// la madafakin consulta para ingresar los datos
$sql = "INSERT INTO usuario (Nombre, correo_eletronico, contraseña) VALUES ('$nombre', '$correo', '$pass')";

if (mysqli_query($conexion, $sql)) {

    // osea se logran incertar los datos crea el trigger de que se logro y va a la pagina de inciio de sesion
    $_SESSION['trigger_regirtro_exitoso'] = 'se madafakin logro el register';
    header("Location: ../inicio/inicio.php");
    exist();
} else {
    // fallo el registro y crea el trigger de error
    $_SESSION['trigger_regirtro_error'] = 'opaaa NO se madafakin logro el register';
    header("Location: ../registro/vista_registro.php"); 
}
// no se que cierra pero cierra algo
mysqli_close($conexion);
?>
