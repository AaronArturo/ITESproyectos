<?php

include("conexion.php");
$conect = conectar();

$id=$_GET["id"];

echo $id;

$actualizar = "SELECT * FROM usuarios  WHERE id_usuario='$id';";
$query = mysqli_query($conect,$actualizar);

$body = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../css/style.css">
        <title>Proyecto</title>
      </head>
<body class="fondo_pantalla">
    <div class="row">
        <div class="col-2 fondo_barra_lateral">
            <img src="../img/icono/icono_nuevo.png" class="w-50 icono">
            <nav class="nav flex-column margin">
                <a class="nav-link texto_color" href="pagina_inicio.php">Inicio</a>
                <a class="nav-link texto_color" href="../html/confirmad.html">Docentes</a>
                <a class="nav-link texto_color" href="#">Alumnos</a>
                <a class="nav-link texto_color" href="#">licenciaturas</a>
                <a class="nav-link texto_color" href="#">Turnos</a>
                <a class="nav-link texto_color" href="#">Periodo escolar</a>
                <a class="nav-link texto_color" href="../html/calendario.html">Calendario</a>
                <a class="nav-link texto_color" href="../html/nusuario.html">Nuevo usuario</a>
                <a class="nav-link texto_color" href="../index.html">Salir</a>
              </nav>
        </div>
        <div class="col-10">
            <div class="container fondo_titulo texto_centrado">
                <div class="col-12">
                    <h2 class="texto_color">Actualizar usuarios</h2>
                </div>
            </div>  
            <div class="container">
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
            <br>
                <form action="updateusuario.php" method="post">
                    <?php
                  echo "<p class='texto_color'>usuario";
                  echo "<input type='text' name='usuario' class='form-control form-control-sm margin_cajatexto' aria-label='Username' aria-describedby='basic-addon1' value='".$body["usuario"]."'</p>";
                  echo "<p class='texto_color'>Correo";
                  echo '<input type="text" name="correo" class="form-control form-control-sm margin_cajatexto" telefonico" aria-label="Username" aria-describedby="basic-addon1" value="'.$body["correo"].'"></p>';
                  echo "<p class='texto_color'>Tipo de ususario";
                  echo '<input type="text" name="opcion" class="form-control form-control-sm margin_cajatexto" aria-label="Username" aria-describedby="basic-addon1" value="'.$body["opcion"].'"></p>';
                echo '<input type="hidden" name="id_usuario" class="form-control form-control-sm margin_cajatexto" aria-label="id" aria-describedby="basic-addon1" value="'.$body["id_usuario"].'"></p><br>';       
                 
                  echo '<button type="submit" class="btn btn-light btn_docente">actualizar</button>'; 
                    ?>
               </form>
            </div>  
          <div class="col-3"></div>
        </div>
      </div>  
        </div>
    </div>
</body>
</html>


