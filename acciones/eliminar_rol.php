<?php

    include('../redirecciones2/conexiondb.php');

    $id_roles = $_GET['id_roles'];

    $sql = "DELETE FROM roles WHERE id_roles='$id_roles'";
    $query = mysqli_query($conectar, $sql);

    if($query){
        Header("Location: ../paneles/panel_roles.php");
    };

?>