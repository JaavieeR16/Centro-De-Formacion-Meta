<?php

    require '../redirecciones2/conexiondb.php';

    $id_empleado = null;
    $nombre_completo = $_POST['nombre_completo'];
    $dni = $_POST['dni'];
    $domicilio = $_POST['domicilio'];
    $provincia = $_POST['provincia'];
    $localidad = $_POST['localidad'];
    $codigop = $_POST['codigop'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $fk_idrol = $_POST['fk_idrol'];

    $sql = "INSERT INTO empleados VALUES(null, '$nombre_completo', '$dni', '$domicilio', '$provincia', '$localidad', '$codigop', '$telefono', '$email', '$fk_idrol')";
    $query = mysqli_query($conectar, $sql);

    if ($query){
        Header("Location: ../paneles/panel_empleados.php");
    };

?>