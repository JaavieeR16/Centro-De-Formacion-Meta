<?php

    require '../redirecciones2/conexiondb.php';

    $id_alumno = null;
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $fk_idrol = $_POST['fk_idrol'];

    $sql = "INSERT INTO usuarios_alumnos VALUES(null, '$usuario', '$contraseña', '$fk_idrol')";
    $query = mysqli_query($conectar, $sql);

    if ($query){
        Header("Location: ../paneles/panel_usuarios.php");
    };

?>