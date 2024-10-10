<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
</head>
<body>
    <h2>Información del formulario</h2>
    <strong><?php echo "Nombre: " . $_SESSION['nombre'] ?></strong><br><br>
    <strong><?php echo "Email: " . $_SESSION['email'] ?></strong><br><br>
    <strong><?php echo "Edad: " . $_SESSION['edad'] ?></strong><br><br>
    <strong><?php echo "País: " . $_SESSION['pais'] ?></strong><br><br>

    <a href="formulario.php">Volver al formulario</a>
</body>
</html>