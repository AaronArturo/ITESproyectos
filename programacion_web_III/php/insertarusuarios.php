<?php
include("conexion.php");
$conect=conectar();

$user =$_POST["usuario"];
$correo =$_POST["correo"];
$opcion =$_POST["opcion"];
$pass =$_POST["contraseña"];

$encript =password_hash($pass, PASSWORD_DEFAULT);

$insert = "INSERT INTO `usuarios` (`id_usuario`, `usuario`, `correo`, `opcion`, `contraseña`) VALUES (NULL, '$user', '$correo', '$opcion', '$encript');";
    
    $query = mysqli_query($conect,$insert);

    if($query){
        header("Location: registrousuario.php");
    }else
    {
        echo "error";
    }
?>
