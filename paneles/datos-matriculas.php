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
    $sql_register = mysqli_query($conectar,"SELECT COUNT(*) AS total_registros FROM matriculas");
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
    $query = mysqli_query($conectar,"SELECT * FROM matriculas LIMIT $desde,$por_pagina");

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
        <link rel="stylesheet" href="../estilos/estilos_paneles_especial-matriculas.css">
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
            <div class="main">
                <table>
                    <caption>MATRÍCULAS ALUMNOS</caption>
                    <thead>
                        <tr>
                            <th>1º Apellido</th>
                            <th>2º Apellido</th>
                            <th>Nombre</th>
                            <th>D.N.I</th>
                            <th>Teléfono</th>
                            <th>Domicilio</th>
                            <th>Provincia</th>
                            <th>Localidad</th>
                            <th>Código Postal</th>
                            <th>Categoría</th>
                            <th>Curso</th>
                            <th>Turno</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_array($query)): ?>
                        <tr>
                            <th> <?= $row['apellido1'] ?> </th>
                            <th> <?= $row['apellido2'] ?> </th>
                            <th> <?= $row['nombre'] ?> </th>
                            <th> <?= $row['dni'] ?> </th>
                            <th> <?= $row['telefono'] ?> </th>
                            <th> <?= $row['domicilio'] ?> </th>
                            <th> <?= $row['provincia'] ?> </th>
                            <th> <?= $row['localidad'] ?> </th>
                            <th> <?= $row['codigop'] ?> </th>
                            <th> <?= $row['categoria'] ?> </th>
                            <th> <?= $row['curso'] ?> </th>
                            <th> <?= $row['turno'] ?> </th>
                            
                            <th><a href="../acciones/eliminar_matricula.php?id_matricula=<?= $row['id_matricula'] ?>" class="users-table--delete">Eliminar</a></th>
                        </tr>
                        <?php 
                            endwhile;
                        ?>
                    </tbody>
                </table>
                <a href="panel_matriculas.php"><button class="btn_crear">Menos datos</button></a>
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