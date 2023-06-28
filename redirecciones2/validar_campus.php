<?php

    require 'conexiondb.php';
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
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso1.php">';

    }else if ($filas['fk_idrol']==4){ //Curso2 = Asistencia a la Dirección

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso2.php">';

    }else if ($filas['fk_idrol']==5){ //Curso3 = Comercio Internacional

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso3.php">';

    } else if ($filas['fk_idrol']==6){ //Curso4 = Gestión de Ventas

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso4.php">';

    } else if ($filas['fk_idrol']==7){ //Curso5 = Marketing y Publicidad

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso5.php">';

    } else if ($filas['fk_idrol']==8){ //Curso6 = Transporte y Logistica

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso6.php">';

    } else if ($filas['fk_idrol']==9){ //Curso7 = Electromedicina Clínica

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso7.php">';

    } else if ($filas['fk_idrol']==10){ //Curso8 = Automatización y Robótica

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso8.php">';

    } else if ($filas['fk_idrol']==11){ //Curso9 = Mantenimiento Electrónico

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso9.php">';

    } else if ($filas['fk_idrol']==12){ //Curso10 = Sistemas Electrotécnicos y Automatizados

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso10.php">';

    } else if ($filas['fk_idrol']==13){ //Curso11 = Ssistemas de Telecomunicaciones

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso11.php">';

    } else if ($filas['fk_idrol']==14){ //Curso12 = Eficiencia Energética y Energía Solar Térmica

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso12.php">';

    } else if ($filas['fk_idrol']==15){ //Curso13 = Energías Renovables

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso13.php">';

    } else if ($filas['fk_idrol']==16){ //Curso14 = Gestión del Agua

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso14.php">';

    } else if ($filas['fk_idrol']==17){ //Curso15 = Administración de Sistemas

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso15.php">';

    } else if ($filas['fk_idrol']==18){ //Curso16 = Desarrollo de Aplicaciones Multiplataforma

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=cursoDAM.php">';

    } else if ($filas['fk_idrol']==19){ //Curso17 = Desarrollo de Aplicaciones Web

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso17.php">';

    } else if ($filas['fk_idrol']==20){ //Curso18 = Fabricación de Productos

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso18.php">';

    } else if ($filas['fk_idrol']==21){ //Curso19 = Laboratorio de Analisis

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso19.php">';

    } else if ($filas['fk_idrol']==22){ //Curso20 = Química Industrial

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso20.php">';

    } else if ($filas['fk_idrol']==23){ //Curso21 = Anatomía Patológica

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso21.php">';

    } else if ($filas['fk_idrol']==24){ //Curso22 = Audiología Protésica

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso22.php">';

    } else if ($filas['fk_idrol']==25){ //Curso23 = Dietética

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso23.php">';

    } else if ($filas['fk_idrol']==26){ //Curso24 = Acondicionamiento Físico

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso24.php">';

    } else if ($filas['fk_idrol']==27){ //Curso25 = Enseñanza y Animación Sociodeportiva

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al curso</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=curso25.php">';

    }else{
        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="mal">Credenciales erroneas, acceso denegado.</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=inicio_campus.php">';
    }

    mysqli_free_result($resultado);
    mysqli_close($conectar);

?>