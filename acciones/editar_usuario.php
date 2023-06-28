<?php

    include('../redirecciones2/conexiondb.php');

    $id_alumno = $_POST['id_alumno'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $fk_idrol = $_POST['fk_idrol'];

    $sql = "UPDATE usuarios_alumnos SET usuario='$usuario', contraseña='$contraseña' WHERE id_alumno='$id_alumno'";
    $query = mysqli_query($conectar, $sql);

    if ($query){
        Header("Location: ../paneles/panel_usuarios.php");
    };

?>