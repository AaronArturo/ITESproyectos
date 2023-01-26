<?php
include("conexion.php");
$conect=conectar();

$id_docente = $_POST["id_docente"];

$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$CURP = $_POST["CURP"];
$RFC = $_POST["RFC"];
$correo = $_POST["correo_institucional"];
$perfil = $_POST["perfil"];

$update = "UPDATE docente SET nombre='$nombre', telefono='$telefono', CURP='$CURP', RFC='$RFC', correo_institucional='$correo', perfil='$perfil' WHERE id_docente='$id_docente'";
$query = mysqli_query($conect, $update);

if($query){
    header("Location: docente.php");
}else{
    echo "a ocurrido un herror";
}
?>