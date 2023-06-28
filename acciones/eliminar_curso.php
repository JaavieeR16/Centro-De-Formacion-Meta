<?php

    include('../redirecciones2/conexiondb.php');

    $id_curso = $_GET['id_curso'];

    $sql = "DELETE FROM cursos WHERE id_roles='$id_curso'";
    $query = mysqli_query($conectar, $sql);

    if($query){
        Header("Location: ../paneles/panel_roles.php");
    };

?>