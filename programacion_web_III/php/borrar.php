<?php

include("conexion.php");

$conect = conectar();

$id =$_GET["id"];

$borrar = "DELETE FROM docente WHERE id_docente = '$id';";

$query = mysqli_query($conect,$borrar);

if($query){
    header("Location: docente.php");
}else{
    echo "a ocurrido u  error";
}
?>