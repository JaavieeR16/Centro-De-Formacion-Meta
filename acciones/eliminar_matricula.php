<?php

    include('../redirecciones2/conexiondb.php');

    $id_matricula = $_GET['id_matricula'];

    $sql = "DELETE FROM matriculas WHERE id_matricula='$id_matricula'";
    $query = mysqli_query($conectar, $sql);

    if($query){
        Header("Location: ../paneles/panel_empleados.php");
    };

?>