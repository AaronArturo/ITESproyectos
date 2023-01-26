<?php
include("conexion.php");
$conect = conectar();

$select = "select * from usuarios";
$query = mysqli_query($conect,$select);

$body = mysqli_fetch_array($query);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>plataforma_docente</title>
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
                    <h2 class="texto_color">Usarios</h2>
                </div>
            </div>   
            <div class="container">
            <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
            <br>
            <h3 class="texto_centrado texto_color">Agregar nuevo Usuario</h3>

                <form action="insertarusuarios.php" method="post">

                  <input type="text" name="usuario" class="form-control form-control-sm margin_cajatexto" placeholder="Usuario" aria-label="Username" aria-describedby="basic-addon1">
                  <input type="text" name="correo" class="form-control form-control-sm margin_cajatexto" placeholder="Correo" aria-label="Username" aria-describedby="basic-addon1"> 
                  <select name="opcion" class="form-select form-control-sm margin_cajatexto" aria-label="Default select example">
                    <option selected>Tipo de usuario</option>
                    <option value="alumno">Alumno</option>
                    <option value="docente">Docente</option>
                  </select>
                  <input type="password" name="contraseña" class="form-control form-control-sm margin_cajatexto" placeholder="Contraseña" aria-label="Username" aria-describedby="basic-addon1"> <br>    
                <button type="submit" class="btn btn-light btn_docente">Agregar</button>   
               </form>
               
            </div>  
          <div class="col-3"></div>
        </div>     
        <div class="container">
        <div class="row">
        <table class="table margin_table">
            <thead class="table-success ">
              <tr>
                <th>id usuario</th>
                <th>Usuario</th>
                <th>Correo</th>
                <th>Tipo de usuario</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <?php
            while($body=mysqli_fetch_array($query)){
              
                echo "<th class='texto_color'>". $body["id_usuario"]."</th>";
                echo "<th class='texto_color'>". $body["usuario"]."</th>";
                echo "<th class='texto_color'>". $body["correo"]."</th>";   
                echo "<th class='texto_color'>". $body["opcion"]."</th>";
                echo "<th><a class='btn btn-info' href='actualizausuario.php ?id=". $body["id_usuario"]."'>editar</th>";
                echo "<th><a class='btn btn-danger' href='borrarusuario.php ?id=". $body["id_usuario"]."'>eliminar</th></tr>";
            };
            ?>
        </table>
        </div> 
        </div>
            </div>
      </div>
    </div>
  </body>
</html>