<?php
session_start();
session_destroy(); // Borra todas las sesiones

session_start();

$_SESSION ['trigger_logout'] = 'pesnequelahabia olvidado turun tun';
// Lo manda al inicio
header("Location: ../Vistas/inicio/inicio.php");
?>