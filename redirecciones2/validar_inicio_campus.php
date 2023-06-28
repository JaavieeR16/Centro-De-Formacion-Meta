<?php
    include ("../conexiondb.php");
    error_reporting(0);

    $usuario = ($_POST['usuario']);
    $contraseña = ($_POST['contraseña']);
    session_start();
    $_SESSION['usuario']=$usuario;

    $consulta = "SELECT * FROM usuarios_alumnos WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
    $resultado = mysqli_query($enlace, $consulta);

    $filas = mysqli_fetch_array($resultado);

    if ($filas['identificador_rol']==1){ //Alumno de 
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
        echo '<meta http-equiv="refresh" content="2; url=paneles/alumnos.php">';
    }else if ($filas['identificador_rol']==2){ //Alumno de
        echo '<meta http-equiv="refresh" content="0; url=paneles/alumnos.php">';
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
        echo '<meta http-equiv="refresh" content="3; url=inicio_campus.php">';
    }

    mysqli_free_result($resultado);
    mysqli_close($enlace);

?>