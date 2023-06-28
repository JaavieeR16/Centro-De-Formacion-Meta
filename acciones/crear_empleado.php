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
                    <form action="validar-nuevo-empleado.php" method="post">
                        <h1>Nuevo Empleado</h1>
                        <input type="text" name="nombre_completo" id="nombre_completo" placeholder="Ingrese nombre completo" require>
                        <input type="text" name="dni" id="dni" placeholder="Ingrese dni" require>
                        <input type="text" name="domicilio" id="domicilio" placeholder="Ingrese domicilio" require>
                        <input type="text" name="provincia" id="provincia" placeholder="Ingrese provincia" require>
                        <input type="text" name="localidad" id="localidad" placeholder="Ingrese localidad" require>
                        <input type="text" name="codigop" id="codigop" placeholder="Ingrese codigo postal" require>
                        <input type="text" name="telefono" id="telefono" placeholder="Ingrese teléfono" require>
                        <input type="text" name="email" id="email" placeholder="Ingrese email" require>
                        <select name="fk_idrol" id="fk_idrol" require>
                            <option value="1">Administrador</option>
                            <option value="2">Equipo Directivo</option>
                            <option value="28">Docente Inglés</option>
                            <option value="29">Docente Gestión de recursos humanos</option>
                            <option value="30">Docente Protocolo empresarial</option>
                            <option value="31">Docente Sistemas de información de mercados</option>
                            <option value="32">Docente Logística de almacenamiento</option>
                            <option value="33">Docente Diseño y elaboración de material de comunicación</option>
                            <option value="34">Docente Gestión administrativa del transporte y la logística</option>
                            <option value="35">Docente Robótica industrial</option>
                            <option value="36">Docente Sistemas de monitorización, registro y cuidados críticos</option>
                            <option value="37">Docente Mantenimiento de equipos de radiocomunicaciones</option>
                            <option value="38">Docente Procesos en instalaciones de infraestructuras comunes de Telecomunicaciones</option>
                            <option value="39">Docente Sistemas de producción audiovisual</option>
                            <option value="40">Docente Certificación energética de edificios</option>
                            <option value="41">Docente Sistemas de energías renovables</option>
                            <option value="42">Docente Gestión eficiente del agua</option>
                            <option value="43">Docente Administración de sistemas operativos</option>
                            <option value="44">Docente Acceso a datos</option>
                            <option value="45">Docente Desarrollo web en entorno cliente</option>
                            <option value="46">Docente Técnicas de producción biotecnología</option>
                            <option value="47">Docente Análisis instrumental</option>
                            <option value="48">Docente Organización y gestión en industrias químicas</option>
                            <option value="49">Docente Necropsias</option>
                            <option value="50">Docente Elaboración de moldes y protectores auditivos</option>
                            <option value="51">Docente Habilidades sociales</option>
                            <option value="52">Docente Actividades de ocio y tiempo libre</option>
                            <option value="53">Docente Desarrollo de Interfaces</option>
                            <option value="54">Docente Programación Multimedia y Dispositivos Móviles</option>
                            <option value="55">Docente Programación de Servicios y Procesos</option>
                        </select>
                        <input type="submit" value="Validar Empleado" name="nuevo-empleado">
                    </form>
                </div>
            </div>
    </body>
</html>