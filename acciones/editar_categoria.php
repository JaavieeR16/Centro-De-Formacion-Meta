<?php

    include('../redirecciones2/conexiondb.php');

    $id_categoria = $_POST['id_categoria'];
    $nombre = $_POST['nombre'];
    $numero_cursos = $_POST['numero_cursos'];

    $sql = "UPDATE categorias_cursos SET nombre='$nombre', numero_cursos='$numero_cursos' WHERE id_categoria='$id_categoria'";
    $query = mysqli_query($conectar, $sql);

    if ($query){
        Header("Location: ../paneles/panel_categorias.php");
    };

?>