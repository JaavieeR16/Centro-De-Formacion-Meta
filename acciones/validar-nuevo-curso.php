<?php

    require '../redirecciones2/conexiondb.php';

    $id_curso = null;
    $nombre = $_POST['nombre'];
    $siglas = $_POST['siglas'];
    $horas = $_POST['horas'];
    $precio = $_POST['precio'];
    $fk_idcategoria = $_POST['fk_idcategoria'];

    $sql = "INSERT INTO cursos VALUES(null, '$nombre', '$siglas', '$horas', '$precio', '$fk_idcategoria')";
    $query = mysqli_query($conectar, $sql);

    if ($query){
        Header("Location: ../paneles/panel_cursos.php");
    };

?>