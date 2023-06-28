<?php

    include('../redirecciones2/conexiondb.php');

    $id_alumno = $_GET['id_alumno'];

    $sql = "DELETE FROM usuarios_alumnos WHERE id_alumno='$id_alumno'";
    $query = mysqli_query($conectar, $sql);

    if($query){
        Header("Location: ../paneles/panel_usuarios.php");
    };

?>