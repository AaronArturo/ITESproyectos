<?php
include("conexion.php");
$conect = conectar();

$usario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

    $insert = "SELECT * FROM `usuarios` WHERE `usuario` = '$usario'";

    $query = mysqli_query($conect,$insert);
    $band=mysqli_num_rows($query);

    $desencrip = mysqli_fetch_array($query);


    if(($band == 1) && (password_verify($contraseña,$desencrip['contraseña']))){
        header("Location: pagina_inicio.php");
    }else
    {
        echo "<script>alert('incorrecto');</script>";
        header("Location: ../html/nusuario.html");
    }

?>