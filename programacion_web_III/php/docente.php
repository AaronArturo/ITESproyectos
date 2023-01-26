<?php
include("conexion.php");
$conect = conectar();

$select = "select * from docente";
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
                <a class="nav-link texto_color" href="#">Docentes</a>
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
                    <h2 class="texto_color">Docentes</h2>
                </div>
            </div>   
            <div class="container">
            <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
            <br>
            <h3 class="texto_centrado texto_color">Agregar nuevo docente</h3>
                <form action="../php/insertar.php" method="post">

                  <input type="text" name="nombre" class="form-control form-control-sm margin_cajatexto" placeholder="Nombre completo" aria-label="Username" aria-describedby="basic-addon1">
                  <input type="text" name="telefono" class="form-control form-control-sm margin_cajatexto" placeholder="Numero telefonico" aria-label="Username" aria-describedby="basic-addon1">
                  <input type="text" name="correo_institucional" class="form-control form-control-sm margin_cajatexto" placeholder="Correo" aria-label="Username" aria-describedby="basic-addon1">
                  <input type="text" name="CURP" class="form-control form-control-sm margin_cajatexto" placeholder="CURP" aria-label="Username" aria-describedby="basic-addon1">
                  <input type="text" name="RFC" class="form-control form-control-sm margin_cajatexto" placeholder="RFC" aria-label="Username" aria-describedby="basic-addon1">
                  <input type="text" name="perfil" class="form-control form-control-sm margin_cajatexto" placeholder="Perfil" aria-label="Username" aria-describedby="basic-addon1"> <br>    
                <button type="submit" class="btn btn-light btn_docente">Agregar</button>   
               </form>
               
            </div>  
          <div class="col-3"></div>
        </div>     
        <div class="row">
        <table class="table margin_table">
            <thead class="table-success ">
              <tr>
                <th>Nombre</th>
                <th>Numero de telefono</th>
                <th>CURP</th>
                <th>RFC</th>
                <th>Correo institucional</th>
                <th>Perfil laboral</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <?php
            while($body=mysqli_fetch_array($query)){
              
                echo "<th class='texto_color'>". $body["nombre"]."</th>";
                echo "<th class='texto_color'>". $body["telefono"]."</th>";
                echo "<th class='texto_color'>". $body["CURP"]."</th>";
                echo "<th class='texto_color'>". $body["RFC"]."</th>";
                echo "<th class='texto_color'>". $body["correo_institucional"]."</th>";
                echo "<th class='texto_color'>". $body["perfil"]."</th>";
                echo "<th><a class='btn btn-info' href='actualiza.php ?id=". $body["id_docente"]."'>editar</th>";
                echo "<th><a class='btn btn-danger' href='borrar.php ?id=". $body["id_docente"]."'>eliminar</th></tr>";
            };

            ?>
        </table>
        </div> 
            </div>
      </div>
    </div>
  </body>
</html>