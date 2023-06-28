<?php

    require '../redirecciones2/conexiondb.php';

    $id_roles = null;
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO roles VALUES(null, '$nombre', '$descripcion')";
    $query = mysqli_query($conectar, $sql);

    if ($query){
        Header("Location: ../paneles/panel_roles.php");
    };

?>