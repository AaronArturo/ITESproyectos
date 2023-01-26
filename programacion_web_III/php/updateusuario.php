<?php
include("conexion.php");
$conect=conectar();

$id = $_POST["id_usuario"];

$usuario = $_POST["usuario"];
$correo = $_POST["correo"];
$opcion =$_POST["opcion"];
$contraseña = $_POST["cpntraseña"];

$update = "UPDATE usuarios SET usuario='$usuario', correo='$correo', opcion='$opcion', contraseña='$contraseña' WHERE id_usuario='$id'";
$query = mysqli_query($conect, $update);

if($query){
    header("Location: registrousuario.php");
}else{
    echo "a ocurrido un herror";
}
?>