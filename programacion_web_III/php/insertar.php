<?php
include("conexion.php");
$conect = conectar();

$id_docente = $_POST["id_docente"];
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$CURP = $_POST["CURP"];
$RFC = $_POST["RFC"];
$correo = $_POST["correo_institucional"];
$perfil = $_POST["perfil"];

    $insert = "INSERT INTO `docente` (`id_docente`, `nombre`, `telefono`, `CURP`, `RFC`, `correo_institucional`, `perfil`) VALUES 
    (NULL, '$nombre', '$telefono', '$CURP', '$RFC', '$correo', '$perfil');";
    
    $query = mysqli_query($conect,$insert);

    if($query){
        header("Location: docente.php");
    }else
    {
        echo "error";
    }
?>