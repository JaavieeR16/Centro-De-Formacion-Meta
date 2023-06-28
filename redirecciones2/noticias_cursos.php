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
            <a href="cursoDAM.php" class="logo">
                <img src="../logo/logo_ladeado_1.png">
            </a>
            <ul class="navegacion">
                <li><a href="cursoDAM.php">Inicio</a></li>
                <li><a href="noticias_cursos.php">Noticias</a></li>
                <li><a href="cursoDAM.php">Contacto</a></li>
                <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>
            </ul>
            <div class="header_iconos">
                <span>
                    <div class="bx bx-menu" id="menu-icon"></div>
                </span>
            </div>
        </header>

        <section class="section-noticias">
            <div class="noticia-completa">
                <div class="imagen-noticia">
                    <img src="../img/asignatura1.jpg" alt="Imagen Noticia">
                </div>
                <div class="textos-noticia">
                    <h2>¡NUEVOS CURSOS DE INGLÉS!</h2>
                    <p>Nuevos cursos de inglés en nuestro centro online, para más información ponte en contacto con el centro</p>
                </div>
            </div>

            <div class="noticia-completa">
                <div class="imagen-noticia">
                    <img src="../img/asignatura1.jpg" alt="Imagen Noticia">
                </div>
                <div class="textos-noticia">
                    <h2>¡NUEVOS CURSOS DE INGLÉS!</h2>
                    <p>Nuevos cursos de inglés en nuestro centro online, para más información ponte en contacto con el centro</p>
                </div>
            </div>

            <div class="noticia-completa">
                <div class="imagen-noticia">
                    <img src="../img/asignatura1.jpg" alt="Imagen Noticia">
                </div>
                <div class="textos-noticia">
                    <h2>¡NUEVOS CURSOS DE INGLÉS!</h2>
                    <p>Nuevos cursos de inglés en nuestro centro online, para más información ponte en contacto con el centro</p>
                </div>
            </div>

            <div class="noticia-completa">
                <div class="imagen-noticia">
                    <img src="../img/asignatura1.jpg" alt="Imagen Noticia">
                </div>
                <div class="textos-noticia">
                    <h2>¡NUEVOS CURSOS DE INGLÉS!</h2>
                    <p>Nuevos cursos de inglés en nuestro centro online, para más información ponte en contacto con el centro</p>
                </div>
            </div>
        </section>

        <section class="contacto2" id="contacto">
            <div class="contacto_main">
                <div class="contacto_contenido">
                    <img src="../logo/logo_ladeado_1.png">
                    <li><a href="https://www.youtube.com/channel/UC-IvM1PWGZehbZUn3ZrCtiA" target="_blank">YouTube</a></li>
                    <li><a href="https://www.instagram.com/jaavieer16/" target="_blank">Instagram</a></li>
                    <li><a href="https://twitter.com/jaavieer_16/" target="_blank">Twitter</a></li>
                </div>
                <div class="contacto_contenido">
                    <li><a href="cursoDAM.php">Inicio</a></li>
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
        <div class="copy2">
            <p>© 2023 Javier Monroy Muñoz. Todos los derechos reservados.</p>
        </div>
    </body>
</html>