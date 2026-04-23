<?php
session_start();
// conexion
include("../../metodos/conexion.php");
// agarra variables del form
$nombre = $_POST['Nombre']; 
$correo = $_POST['correo_electronico'];
$pass = $_POST['contraseña'];
//hacemos la inteccion
$sql = "INSERT INTO usuario (Nombre, correo_eletronico, contraseña) VALUES ('$nombre', '$correo', '$pass')";

if (mysqli_query($conexion, $sql)) {
    //funciono todo cable
    // osea se logran incertar los datos
    $_SESSION['trigger_regirtro_exitoso'] = 'se madafakin logro el register';
    header("Location: ../inicio/inicio.php");
    exist();
} else {
    // fallo el registro
    header("Location: ../registro/vista_registro.php");
    $_SESSION['trigger_regirtro_error'] = 'opaaa NO se madafakin logro el register';
}
// no se que cierra pero cierra algo
mysqli_close($conexion);
?>