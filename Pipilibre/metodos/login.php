<?php
session_start(); // Paso 1: Iniciar el sistema de sesiones
include("conexion.php");

// Capturamos los datos del formulario de inicio.html
$nombre = $_POST['Nombre'];
$pass = $_POST['pass']; 

// Buscamos si existe el usuario con esa contraseña exacta
$consulta = "SELECT * FROM usuario WHERE Nombre='$nombre' AND contraseña='$pass'";
$resultado = mysqli_query($conexion, $consulta);

if (mysqli_num_rows($resultado) > 0) {
    // Si hay coincidencia, guardamos el nombre en la sesión
    $_SESSION['usuario_logueado'] = $nombre;
    // Redirigimos a la página principal
    header("Location: ../Vistas/principal/principal.php");
} else {
    $_SESSION['trigger_inicio_error'] = 'usuario o contraseña incorrecta';
    header("Location: ../vistas/inicio/inicio.php");
}
?>