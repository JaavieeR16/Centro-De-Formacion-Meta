<?php

    error_reporting(0);
    include ("conexiondb.php");

    //seguridad de sesiones 
    session_start();
    $varsesion = $_SESSION['usuario'];
    if($varsesion==null || $varsesion=''){
        echo "No tienes autorización para entrar en esta página.";
        die();
    }

?>

<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../estilos/estilos_dam.css">
        <link rel="shortcut icon" href="../logo/favicon.ico" type="image/x-icon">
        <title>Centro de Formación Meta: DAM</title>
    </head>
    <body>

        <header>
            <a href="index.html" class="logo">
                <img src="../logo/logo_ladeado_1.png">
            </a>
            <ul class="navegacion">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="noticias_cursos.php">Noticias</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
            <div class="header_iconos">
                <span>
                    <div class="bx bx-menu" id="menu-icon"></div>
                </span>
            </div>
        </header>

        <section class="inicio" id="inicio">
            <div class="inicio_texto">
                <h1>2º Desarrollo de Aplicaciones Multiplataforma</h1>
            </div>
            <div class="tabla-asignaturas">
                <table>
                    <thead>
                        <tr>
                            <th><img src="../img/asignatura1.jpg" alt="Inglés"></th>
                            <th><img src="../img/asignatura2.jpg" alt="Acceso a Datos"></th>
                            <th><img src="../img/asignatura3.jpg" alt="Desarrollo de Interfaces"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><a href="ingles_dam.php">Inglés</a></th>
                            <th><a href="acceso_dam.php">Acceso a Datos</a></th>
                            <th><a href="interfaces_dam.php">Desarrollo de Interfaces</a></th>
                        </tr>
                    </tbody>
                    <thead>
                        <tr>
                            <th><img src="../img/asignatura4.jpg" alt="Programación de Servicios y Procesos"></th>
                            <th><img src="../img/asignatura5.jpg" alt="Programación Multimedia y Dispositivos Móviles"></th>
                            <th><img src="../img/asignatura6.jpg" alt="Formación en Centros de Trabajo"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><a href="psp_dam.php">Programación de Servicios y Procesos</a></th>
                            <th><a href="prog_dam.php">Programación Multimedia y Dispositivos Móviles</a></th>
                            <th><a href="cursoDAM.php">Formación en Centros de Trabajo (Próximamente)</a></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="contacto" id="contacto">
            <div class="contacto_main">
                <div class="contacto_contenido">
                    <img src="../logo/logo_ladeado_1.png">
                    <li><a href="https://www.youtube.com/channel/UC-IvM1PWGZehbZUn3ZrCtiA" target="_blank">YouTube</a></li>
                    <li><a href="https://www.instagram.com/jaavieer16/" target="_blank">Instagram</a></li>
                    <li><a href="https://twitter.com/jaavieer_16/" target="_blank">Twitter</a></li>
                </div>
                <div class="contacto_contenido">
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="noticias_cursos.php">Noticias</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                    <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
                </div>
                <!--<div class="contacto_contenido">
                    <li><a href="redirecciones2/hacer_matricula.php" target="_blank">Matricularse</a></li>
                    <li><a href="redirecciones2/inicio_campus.php" target="_blank">Campus Virtual</a></li>
                    <li><a href="redirecciones2/inicio_panel.php" target="_blank">Panel de Control</a></li>
                </div>-->
                <div class="contacto_contenido">
                    <li><a href="https://goo.gl/maps/BrkaHDeKa3WBGwyL7" target="_blank">Avd. Cortes Valencianas, 56 CP
                            46001<br> Valencia. España</a></li>
                    <li>Email: centro@metaformacion.com</li>
                    <li>Tfno: 96 015 27 18</li>
                </div>
            </div>
        </section>
        <div class="copy">
            <p>© 2023 Javier Monroy Muñoz. Todos los derechos reservados.</p>
        </div>
    </body>
</html>