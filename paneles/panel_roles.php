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

    /* PAGINADOR */
    $sql_register = mysqli_query($conectar,"SELECT COUNT(*) AS total_registros FROM roles");
    $result_register = mysqli_fetch_array($sql_register);
    $total_registro = $result_register['total_registro'];

    $por_pagina = 10;

    if(empty($_GET['pagina'])){
        $pagina = 1;
    }else{
        $pagina = $_GET['pagina'];
    }

    $desde = ($pagina-1) * $por_pagina;
    $total_paginas = ceil($total_registro / $por_pagina);

    /* CONSULTA PARA MOSTRAR DATOS EN TABLA */
    /*$sql = "SELECT * FROM empleados LIMIT $desde,$por_pagina";
    $query = mysqli_query($conectar, $sql);*/
    $query = mysqli_query($conectar,"SELECT * FROM roles LIMIT $desde,$por_pagina");

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
                        <a href="panel_usuarios.php">
                            <i class="fa-solid fa-user"></i>
                            <div>Usuarios</div>
                        </a>
                    </li>
                    <li>
                        <a href="panel_empleados.php">
                            <i class="fa-solid fa-chalkboard-user"></i>
                            <div>Empleados</div>
                        </a>
                    </li>
                    <li>
                        <a href="panel_matriculas.php">
                            <i class="fa-solid fa-user-graduate"></i>
                            <div>Matrículas</div>
                        </a>
                    </li>
                    <li>
                        <a href="panel_estadisticas.php">
                            <i class="fa-solid fa-chart-pie"></i>
                            <div>Estadísticas</div>
                        </a>
                    </li>
                    <li>
                        <a href="panel_roles.php">
                            <i class="fa-solid fa-users-between-lines"></i>
                            <div>Roles</div>
                        </a>
                    </li>
                    <li>
                        <a href="panel_cursos.php">
                            <i class="fa-solid fa-note-sticky"></i>
                            <div>Cursos</div>
                        </a>
                    </li>
                    <li>
                        <a href="panel_categorias.php">
                            <i class="fa-solid fa-certificate"></i>
                            <div>Categorias</div>
                        </a>
                    </li>
                    <li>
                        <a href="../redirecciones2/cerrar_sesion.php">
                            <i class="fa-solid fa-right-from-bracket"></i>
                            <div>Cerrar Sesión</div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="main">
                <table>
                    <caption>ROLES</caption>
                    <thead>
                        <tr>
                            <th>Identificador</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th colspan="2">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <th> <?= $row['id_roles'] ?> </th>
                            <th> <?= $row['nombre'] ?> </th>
                            <th> <?= $row['descripcion'] ?> </th>

                            <th><a href="../acciones/actualizar_rol.php?id_roles=<?= $row['id_roles'] ?>" class="users-table--edit">Editar</a></th>
                            <th><a href="../acciones/eliminar_rol.php?id_roles=<?= $row['id_roles'] ?>" class="users-table--delete">Eliminar</a></th>
                        </tr>
                        <?php 
                            endwhile;
                        ?>
                    </tbody>
                </table>
                <a href="../acciones/crear_rol.php"><button class="btn_crear">Nuevo Rol</button></a>
                <div class="paginador">
                    <ul>
                        <?php
                            /*if(pagina != 1){*/
                        ?>
                        <li><a href="?pagina=<?php echo 1; ?>">|<</a></li>
                        <li><a href="?pagina=<?php echo $pagina-1; ?>"><<</a></li>
                        <?php
                            /*}*/
                            for ($i=1; $i <= $total_paginas; $i++){
                                if($i == $pagina){
                                    echo '<li class="paginaSeleccionada">'.$i.'</li>';
                                }else{
                                    echo '<li><a href="?pagina='.$i.'">'.$i.'</a></li>';
                                }
                            }
                            /*if($pagina != $total_paginas){*/
                        ?>
                        <li><a href="?pagina=<?php echo $pagina+1; ?>">>></a></li>
                        <li><a href="?pagina=<?php echo $total_paginas; ?>">>|</a></li>
                        <?php /*}*/ ?>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>