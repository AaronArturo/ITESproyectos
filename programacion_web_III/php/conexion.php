<?php
function conectar(){
    $servidor = "localhost";
    $user = "root";
    $password = "";
    $basededatos = "escolarregistro";

    //conexion con el servidor
    $conexion = mysqli_connect($servidor,$user,$password);
    //conecta con la base de datos
    mysqli_select_db($conexion,$basededatos);

    return $conexion;
}
?>
