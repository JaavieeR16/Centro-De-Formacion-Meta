<?php

    include('../redirecciones2/conexiondb.php');

    $id_categoria = $_GET['id_categoria'];

    $sql = "DELETE FROM categorias_cursos WHERE id_categoria='$id_categoria'";
    $query = mysqli_query($conectar, $sql);

    if($query){
        Header("Location: ../paneles/panel_categorias.php");
    };

?>