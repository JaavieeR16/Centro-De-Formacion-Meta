<?php

    include('../redirecciones2/conexiondb.php');

    $id_curso = $_POST['id_curso'];
    $nombre = $_POST['nombre'];
    $siglas = $_POST['siglas'];
    $horas = $_POST['horas'];

    $sql = "UPDATE cursos SET nombre='$nombre', siglas='$siglas', horas='$horas' WHERE id_curso='$id_curso'";
    $query = mysqli_query($conectar, $sql);

    if ($query){
        Header("Location: ../paneles/panel_cursos.php");
    };

?>