<?php

    require '../redirecciones2/conexiondb.php';

    $id_roles = null;
    $nombre = $_POST['nombre'];
    $numero_cursos = $_POST['numero_cursos'];

    $sql = "INSERT INTO categorias_cursos VALUES(null, '$nombre', '$numero_cursos')";
    $query = mysqli_query($conectar, $sql);

    if ($query){
        Header("Location: ../paneles/panel_categorias.php");
    };

?>