<?php

    require 'conexiondb.php';

    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $genero = $_POST['genero'];
    $nacimiento = $_POST['nacimiento'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $estudios = $_POST['estudios'];
    $domicilio = $_POST['domicilio'];
    $piso = $_POST['piso'];
    $nacionalidad = $_POST['nacionalidad'];
    $provincia = $_POST['provincia'];
    $localidad = $_POST['localidad'];
    $codigop = $_POST['codigop'];
    $categoria = $_POST['categoria'];
    $curso = $_POST['curso'];
    $turno = $_POST['turno'];

    $insertar = "INSERT INTO matriculas VALUES(null,'$apellido1','$apellido2','$nombre','$dni','$genero','$nacimiento','$email','$telefono','$estudios','$domicilio','$piso','$nacionalidad','$provincia','$localidad','$codigop','$categoria','$curso','$turno')";

    $query = mysqli_query($conectar, $insertar);

    /*if ($query){

        echo "<script> alert('Usuario guardado'); </script>";
        header('Location: ../index.html');

    } else{

        echo "<script> alert('Usuario no guardado'); </script>";
        header('Location: ../hacer_matricula.php');

    }*/

    if ($query){
        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="ok">Matriculado correctamente!</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="2; url=inicio_campus.php">';
    }else{
        ?>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="../estilos/estilos_matricula.css">
            </head>
            <body>
                <h1 class="mal">Error en el registro, vuelva a intentarlo.</h1>
            </body>
        </html>
        <?php
        echo '<meta http-equiv="refresh" content="3; url=hacer_matricula.php">';
    }

?>