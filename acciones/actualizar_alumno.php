<?php

    include ('../redirecciones2/conexiondb.php');

    $id_alumno = $_GET['id_alumno'];

    $sql = "SELECT * FROM usuarios_alumnos WHERE id_alumno = '$id_alumno'";
    $query = mysqli_query($conectar, $sql);
    $row = mysqli_fetch_array($query);

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
                <form action="editar_usuario.php" method="post">
                    <h1>Editar Alumno</h1>
                    <input type="hidden" name="id_alumno" value="<?= $row['id_alumno'] ?>">
                    <input type="text" name="usuario" placeholder="Usuario" value="<?= $row['usuario'] ?>">
                    <input type="text" name="contraseña" placeholder="contraseña" value="<?= $row['contraseña'] ?>">
                    <input type="text" name="fk_idrol" placeholder="Rol" value="<?= $row['fk_idrol'] ?>">
                    <input type="submit" value="Actualizar información" name="update_empleado">
                </form>
            </div>
    </body>
</html>