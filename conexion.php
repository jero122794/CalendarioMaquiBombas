<?php

function regresarConexion() {
    $server = "localhost";
    $usuario = "root";
    $clave = "";
    $base = "calendario_web_tecnicos";
    
    $conexion = mysqli_connect($server, $usuario, $clave, $base) or die ("Problemas con la Conexion");
    mysqli_set_charset($conexion, 'utf8');
    return $conexion;
}


?>