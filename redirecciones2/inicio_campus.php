<?php
    /*require 'conexiondb.php';
    error_reporting(0);

    session_start();

    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    $_SESSION['usuario']=$usuario;

    $consulta = "SELECT * FROM usuarios_alumnos WHERE usuario = '$usuario' AND contraseña = '$contraseña'";

    $resultado = mysqli_query($conectar, $consulta);

    $filas = mysqli_fetch_array($resultado);

    if ($filas['fk_idrol']==3){ //Curso1 = Administración y Finanzas
        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="css/estilos.css">
            </head>
            <body>
                <h1 class="h1_validar">Redireccionando al panel de control</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso1.php">';
    }else if ($filas['fk_idrol']==4){ //Curso2 = Asistencia a la Dirección
        echo '<meta http-equiv="refresh" content="2; url=curso2.php">';
    }else{
        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="css/estilos.css">
            </head>
            <body>
                <h1 class="h1_validar">Credenciales erroneas, acceso denegado.</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=../index.html">';
    }

    mysqli_free_result($resultado);
    mysqli_close($conectar);*/

    /*if (!empty($_POST["btn_login"])){
        if (empty($_POST["usuario"]) && empty($_POST["contraseña"])){
            echo 'Los campos estan vacios.';
        } else {
            $usuario = $_POST["usuario"];
            $contraseña = $_POST["contraseña"];
            $sql = $conectar -> query("select * from usuarios_alumnos where usuario = '$usuario' and contraseña = '$contraseña'");
            if ($datos = $sql -> fetch_object()){
                header("location:../index.html");
            } else {
                echo 'Acceso denegado';
            }
        }
    } */
?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/8ed440f220.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../estilos/estilos_login.css">
        <link rel="shortcut icon" href="../logo/favicon.ico" type="image/x-icon">
        <title>Centro de Formación Meta: Campus Virtual</title>
    </head>
    <body>
        <div class="contenedor-formulario contenedor">
            <div class="imagen-formulario">
                
            </div>

            <form class="formulario" action="validar_campus.php" method="post">
                <div class="texto-formulario">
                    <h2>Bienvenido de nuevo</h2>
                    <p>Campus Virtual</p>
                </div>
                <div class="input">
                    <label for="usuario">Usuario</label>
                    <input placeholder="Ingrese usuario" type="text" id="usuario" name="usuario" required>
                </div>
                <div class="input">
                    <label for="contraseña">Contraseña</label>
                    <input placeholder="Ingrese contraseña" type="password" id="contraseña" name="contraseña" required>
                </div>
                <div class="password-olvidada">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
                <div class="input">
                    <input type="submit" value="Entrar" name="btn_login">
                </div>
            </form>
        </div>
    </body>
</html>