
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="formulario.php" method="POST">
        Nombre: <input type="text" id="nombre" name="nombre" placeholder="Introduzca su nombre"><br><br>
        Email: <input type="email" id="email" name="email" placeholder="Introduzca su email"><br><br>
        Edad: <input type="number" id="nombre" name="edad" placeholder="Introduzca su edad"><br><br>
        País: <input type="text" id="pais" name="pais" placeholder="Introduzca su país"><br><br>
        <input type="submit"><br>
    </form>
</body>
</html>

<?php

    session_start();
    
    if (isset($_POST['nombre']) && isset($_POST['email']) &&isset($_POST['edad']) && isset($_POST['pais'])){
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['edad'] = $_POST['edad'];
        $_SESSION['pais'] = $_POST['pais'];

        if (!empty($_SESSION['nombre']) && !empty($_SESSION['email']) && !empty($_SESSION['edad']) && !empty($_SESSION['pais']) ) {
            header("Location: informacion.php");
            exit();
        } else {
            if (empty($_SESSION['nombre']) ) {
                echo 'Falta introducir el nombre. | ';
            }

            if (empty($_SESSION['email'])  ) {
                echo 'Falta introducir el email. | ';
            } elseif (!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/", $_SESSION['email'])) {
                echo 'El formato del email es invalido. ejemplo@ejemplo.com | ';
            }

            if (empty($_SESSION['edad']) ) {
                echo 'Falta introducir la edad. | ';
            } elseif ($_SESSION['edad'] < 0 || $_SESSION['edad'] > 120 ){
                echo 'La edad debe ser mayor que 0 y menor de 120 años. | ';
            }

            if (empty($_SESSION['pais']) ) {
                echo 'Falta introducir el pais. ';
            }
        }
    }
?>