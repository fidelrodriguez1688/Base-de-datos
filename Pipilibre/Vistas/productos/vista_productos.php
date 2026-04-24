
<?php
session_start();
if (!isset($_SESSION['usuario_logueado'])) {
    header("Location: ../inicio/inicio.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pipilibre - Principal</title>
    <link rel="stylesheet" href="productos.css">
</head>
<body>

    <div class="contenedor-fondo">
        <!--  ahhhh comentario de barra de arriba -->
        <header class="barra_superior">
            <!-- logo de la izquierda-->
            <img class="logowich_arriba" src="../../imagenes/reallogo.png" alt="Logo">
            <!-- cosobich de la derechovich-->
            <div class="cosas_derecha">
               <div class="conteiner_usuario_arriba">
                 <!-- los madafakin select de dinero y el nombre del usuairo -->

                <img class="imagen_usuario_inside" src="../../imagenes/logousuario.png" alt="Logo">
                     <?php
                        echo "$_SESSION[usuario_logueado]";
                     ?>
                </div>     
                <!-- -->
                <div class="barra_derecha">
                    <a href="../principal/principal.php"><button>⬅️Volver a pagina principal⬅️</button></a>
                </div>
            </div>
        </header>
        <!-- aca deberian ir los poducto pero por el momento la re paja -->
        <main class="container">
            <h2>Bienvenido a tus productos</h2>
        </main>
    </div>

</body>
</html>