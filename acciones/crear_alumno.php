<?php
    error_reporting(0);
    include ("../redirecciones2/conexiondb.php");

    //seguridad de sesiones paginación.
    session_start();
    error_reporting(0);
    $varsesion= $_SESSION['dni'];
    if ($varsesion== null || $varsesion=''){
        echo 'No tienes autorización para entrar en esta página.';
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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="https://kit.fontawesome.com/8ed440f220.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../estilos/estilos_paneles.css">
        <link rel="shortcut icon" href="../logo/favicon.ico" type="image/x-icon">
        <title>Centro de Formación Meta: Panel de Control</title>
        <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    </head>
    <body>
        <div class="container">
            <div class="topbar">
                <div class="logo">
                    <img src="../logo/logo_ladeado_1.png" alt="Logo Centro de Formación Meta">
                </div>
                <div class="search">
                    <input type="text" name="search" id="search" placeholder="Buscar">
                    <label for="search"><i class='bx bx-search-alt-2'></i></label>
                </div>
                <i class="fa-regular fa-bell"></i>
                <div class="user">
                    <img src="../img/avatar.png" alt="Avatar de Usuario">
                </div>
            </div>
            <div class="sidebar">
                <ul>
                    <li>
                        <a href="../redirecciones2/panel_control.php">
                            <i class='bx bxs-dashboard' ></i>
                            <div>Panel de Control</div>
                        </a>
                    </li>
                    <li>
                        <a href="../paneles/panel_usuarios.php">
                            <i class="fa-solid fa-user"></i>
                            <div>Usuarios</div>
                        </a>
                    </li>
                    <li>
                        <a href="../paneles/panel_empleados.php">
                            <i class="fa-solid fa-chalkboard-user"></i>
                            <div>Empleados</div>
                        </a>
                    </li>
                    <li>
                        <a href="../paneles/panel_matriculas.php">
                            <i class="fa-solid fa-user-graduate"></i>
                            <div>Matrículas</div>
                        </a>
                    </li>
                    <li>
                        <a href="../paneles/panel_estadisticas.php">
                            <i class="fa-solid fa-chart-pie"></i>
                            <div>Estadísticas</div>
                        </a>
                    </li>
                    <li>
                        <a href="../paneles/panel_roles.php">
                            <i class="fa-solid fa-users-between-lines"></i>
                            <div>Roles</div>
                        </a>
                    </li>
                    <li>
                        <a href="../paneles/panel_cursos.php">
                            <i class="fa-solid fa-note-sticky"></i>
                            <div>Cursos</div>
                        </a>
                    </li>
                    <li>
                        <a href="../paneles/panel_categorias.php">
                            <i class="fa-solid fa-certificate"></i>
                            <div>Categorias</div>
                        </a>
                    </li>
                    <li>
                        <a href="cerrar_sesion.php">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <div>Cerrar Sesión</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="main">
                <div class="div-padre-form-nuevo">
                    <form action="validar-nuevo-alumno.php" method="post">
                        <h1>Nuevo Alumno</h1>
                        <input type="text" name="usuario" id="usuario" placeholder="Ingrese usuario" require>
                        <input type="text" name="contraseña" id="contraseña" placeholder="Ingrese contraseña" require>
                        <select name="fk_idrol" id="fk_idrol" require>
                            <option value="3">Alumno Administración y Finanzas</option>
                            <option value="4">Alumno Asistencia a la Dirección</option>
                            <option value="5">Alumno Comercio Internacional</option>
                            <option value="6">Alumno Gestión de Ventas</option>
                            <option value="7">Alumno Marketing y Publicidad</option>
                            <option value="8">Alumno Transporte y Logística</option>
                            <option value="9">Alumno Electromedicina Clínica</option>
                            <option value="10">Alumno Automatización y Robótica</option>
                            <option value="11">Alumno Mantenimiento Electrónico</option>
                            <option value="12">Alumno Sistemas Electrotécnicos y Automatzados</option>
                            <option value="13">Alumno Sistemas de Telecomunicaciones</option>
                            <option value="14">Alumno Eficiencia Energética y Energía Solar Térmica</option>
                            <option value="15">Alumno Energías Renovables</option>
                            <option value="16">Alumno Gestión del Agua</option>
                            <option value="17">Alumno Administración de Sitemas</option>
                            <option value="18">Alumnos Desarrollo de Aplicaciones Multiplataforma</option>
                            <option value="19">Alumno Desarrollo de Aplicaciones Web</option>
                            <option value="20">Alumno Fabricación de Productos</option>
                            <option value="21">Alumno Laboratorio de Análisis</option>
                            <option value="22">Alumno Química Industrial</option>
                            <option value="23">Alumno Anatomía Patológica</option>
                            <option value="24">Alumno Audiología Portésica</option>
                            <option value="25">Alumno Dietética</option>
                            <option value="26">Alumno Acondicionamiento Físico</option>
                            <option value="27">Alumno Enseñanza y Animación Sociodeportiva</option>
                        </select>
                        <input type="submit" value="Validar Usuario" name="nuevo-empleado">
                    </form>
                </div>
            </div>
    </body>
</html>