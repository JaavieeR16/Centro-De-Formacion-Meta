<?php

    include('../redirecciones2/conexiondb.php');

    $id_roles = $_POST['id_roles'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $sql = "UPDATE roles SET nombre='$nombre', descripcion='$descripcion' WHERE id_roles='$id_roles'";
    $query = mysqli_query($conectar, $sql);

    if ($query){
        Header("Location: ../paneles/panel_roles.php");
    };

?>