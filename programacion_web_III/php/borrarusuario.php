<?php

include("conexion.php");

$conect = conectar();

$id =$_GET["id"];

$borrar = "DELETE FROM usuarios WHERE id_usuario = '$id';";

$query = mysqli_query($conect,$borrar);

if($query){
    header("Location: registrousuario.php");
}else{
    echo "a ocurrido un error";
}
?>