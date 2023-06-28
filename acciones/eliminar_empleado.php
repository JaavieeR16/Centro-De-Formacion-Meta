<?php

    include('../redirecciones2/conexiondb.php');

    $id_empleado = $_GET['id_empleado'];

    $sql = "DELETE FROM empleados WHERE id_empleado='$id_empleado'";
    $query = mysqli_query($conectar, $sql);

    if($query){
        Header("Location: ../paneles/panel_empleados.php");
    };

?>