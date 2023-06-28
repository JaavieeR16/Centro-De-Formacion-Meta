<?php

    include('../redirecciones2/conexiondb.php');

    $id_empleado = $_POST['id_empleado'];
    $nombre_completo = $_POST['nombre_completo'];
    $dni = $_POST['dni'];
    $domicilio = $_POST['domicilio'];
    $provincia = $_POST['provincia'];
    $localidad = $_POST['localidad'];
    $codigop = $_POST['codigop'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $fk_idrol = $_POST['fk_idrol'];

    $sql = "UPDATE empleados SET nombre_completo='$nombre_completo', dni='$dni', domicilio='$domicilio', provincia='$provincia', localidad='$localidad', codigop='$codigop', telefono='$telefono', email='$email', fk_idrol='$fk_idrol' WHERE id_empleado='$id_empleado'";
    $query = mysqli_query($conectar, $sql);

    if ($query){
        Header("Location: ../paneles/panel_empleados.php");
    };

?>