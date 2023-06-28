<?php

    $server = 'localhost';
    $usuario = 'root';
    $password = '@Mislata.2022';
    $db = 'formacionmetadb';

    $conectar = mysqli_connect($server, $usuario, $password, $db) or die ("Error de conexión.");
    return $conectar;
    
?>