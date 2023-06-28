<?php

    require 'conexiondb.php';
    error_reporting(0);

    session_start();

    $dni = $_POST["dni"];
    $dni = $_POST["dni"];
    $_SESSION['dni']=$dni;

    $consulta = "SELECT * FROM empleados WHERE dni = '$dni' AND dni = '$dni'";

    $resultado = mysqli_query($conectar, $consulta);

    $filas = mysqli_fetch_array($resultado);

    if ($filas['fk_idrol']==1){ //Administrador (Control Total)

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al Panel de Control</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=panel_control.php">';

    }else if ($filas['fk_idrol']==2){ //Equipo Directivo (Solo visualizar Panel)

        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Redireccionando al Panel de Control</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=panel_control_visual.php">';

    }else if ($filas['fk_idrol']==28){ //Docente Inglés

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
        echo '<meta http-equiv="refresh" content="2; url=docente_ingles.php">';

    } else if ($filas['fk_idrol']==29){ //Docente Gestión de recursos humanos

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
        echo '<meta http-equiv="refresh" content="2; url=docente_rrhh.php">';

    } else if ($filas['fk_idrol']==30){ //Docente Protocolo Empresarial

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
        echo '<meta http-equiv="refresh" content="2; url=docente_prot_empresa.php">';

    } else if ($filas['fk_idrol']==31){ //Docente Sistemas de información de mercados

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
        echo '<meta http-equiv="refresh" content="2; url=docente_sist_info_merca.php">';

    } else if ($filas['fk_idrol']==32){ //Docente Logística de alamcenamiento

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
        echo '<meta http-equiv="refresh" content="2; url=docente_logist_almacen.php">';

    } else if ($filas['fk_idrol']==33){ //Docente Diseño y elaboración de material de comunicación

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
        echo '<meta http-equiv="refresh" content="2; url=docente_dise_material_comunic.php">';

    } else if ($filas['fk_idrol']==34){ //Docente Gestión administrativa del transporte y la logística

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
        echo '<meta http-equiv="refresh" content="2; url=docente_gestion_administrativa.php">';

    } else if ($filas['fk_idrol']==35){ //Docente Robótica Industrial

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
        echo '<meta http-equiv="refresh" content="2; url=docente_robor_indust.php">';

    } else if ($filas['fk_idrol']==36){ //Docente Sistemas de monitorización, registro y cuidados críticos

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
        echo '<meta http-equiv="refresh" content="2; url=docente_siste_monitorizacion.php">';

    } else if ($filas['fk_idrol']=37){ //Docente Mantenimiento de equipos de radiocomunicaciones

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
        echo '<meta http-equiv="refresh" content="2; url=docente_prog_multimedia.php">';

    } else if ($filas['fk_idrol']==38){ //Docente Procesos en instalaciones de ingraestructuras comunes de Telecomunicaciones

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
        echo '<meta http-equiv="refresh" content="2; url=docente_proc_infraestructuras.php">';

    } else if ($filas['fk_idrol']==39){ //Docente Sistemas de produccion audiovisual

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
        echo '<meta http-equiv="refresh" content="2; url=docente_sist_produc_audiovisu.php">';

    } else if ($filas['fk_idrol']==40){ //Docente Certificacion energetica de edificios

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
        echo '<meta http-equiv="refresh" content="2; url=docente_certif_energ_edifi.php">';

    } else if ($filas['fk_idrol']==41){ //Docente Sistemas de energías renovables

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
        echo '<meta http-equiv="refresh" content="2; url=docente_sist_energias_renov.php">';

    } else if ($filas['fk_idrol']==42){ //Docente Gestión eficinte del agua

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
        echo '<meta http-equiv="refresh" content="2; url=docente_gestion_agua.php">';

    } else if ($filas['fk_idrol']==43){ //Docente Administracion de sistemas operativos

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
        echo '<meta http-equiv="refresh" content="2; url=docente_sist_operativos.php">';

    } else if ($filas['fk_idrol']==44){ //Docente Acceso a Datos

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
        echo '<meta http-equiv="refresh" content="2; url=docente_acceso_datos.php">';

    } else if ($filas['fk_idrol']==45){ //Docente desarrollo web en entorno cliente

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
        echo '<meta http-equiv="refresh" content="2; url=docente_desarrollo_web.php">';

    } else if ($filas['fk_idrol']==46){ //Docente Técnicas de producción biotecnología

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
        echo '<meta http-equiv="refresh" content="2; url=docente_biotecnologia.php">';

    } else if ($filas['fk_idrol']==47){ //Docente Análisis instrumental

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
        echo '<meta http-equiv="refresh" content="2; url=docente_analisis.php">';

    } else if ($filas['fk_idrol']==48){ //Docente Organizacion y gestion en industrias químicas

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
        echo '<meta http-equiv="refresh" content="2; url=docente_industrias.php">';

    } else if ($filas['fk_idrol']==49){ //Docente Necropsias

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
        echo '<meta http-equiv="refresh" content="2; url=docente_necropsias.php">';

    } else if ($filas['fk_idrol']==50){ //Docente Elaboracion de moldes y protectores auditivos

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
        echo '<meta http-equiv="refresh" content="2; url=docente_moldes.php">';
    
    } else if ($filas['fk_idrol']==51){ //Docente Habilidades sociales

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
            echo '<meta http-equiv="refresh" content="2; url=docente_sociales.php">';
    
        }else if ($filas['fk_idrol']==52){ //Docente Actividades de ocio y tiempo libre

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
            echo '<meta http-equiv="refresh" content="2; url=docente_tiempo_libre.php">';

        }else if ($filas['fk_idrol']==53){ //Docente Desarrollo de Interfaces

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
            echo '<meta http-equiv="refresh" content="2; url=docente_desarrollo_interfaces.php">';

        }else if ($filas['fk_idrol']==54){ //Docente Programción Multimedia y dispositivos móviles

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
            echo '<meta http-equiv="refresh" content="2; url=docente_prog_multimedia.php">';

        }else if ($filas['fk_idrol']==55){ //Docente Programación de Servicios y Procesos

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
            echo '<meta http-equiv="refresh" content="2; url=docente_prog_servicios.php">';

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
        echo '<meta http-equiv="refresh" content="2; url=inicio_panel.php">';
    }

    mysqli_free_result($resultado);
    mysqli_close($conectar);

?>