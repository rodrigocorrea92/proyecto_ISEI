<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </head>
  <body>

    <!-- Barra de navegación -->
<header>
        <nav class="navbar navbar-dark bg-dark">
          <ul class="nav">
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Alumnos</a>

              <div class="dropdown-menu">
                <a class="dropdown-item" href="#"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;Ver alumnos</a>
                <a class="dropdown-item" href="agregar.php"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Agregar alumno</a>
                <a class="dropdown-item" href="lista.php"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;filtrar alumnos</a>
              </div>

            </li>

          </ul>
        </nav>
    </header>
           <div class="container"> 
            <div style="display:flex;justify-content:center;align-items:center;"><h1>Lista de alumnos</h1></div>
            <br>

    <table class="table table-bordered">
          <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Nro Doc</th>
              <th>Fecha Nacimiento</th>
              <th>Nivel</th>
              <th>Grado</th>
              <th>Colegio</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
          <?php 
              require_once realpath($_SERVER["DOCUMENT_ROOT"]) .'/ISEI Floreal/PHP/acciones/alumnos/listAll.php'; 

            foreach ($listAlumnos as $p){ ?>
          <?php 
          echo '<tr><td>'.$p-> nombre.'</td>'.'<td>'. $p-> apellido.'</td>'.'<td>'. $p-> nro_doc.'</td>'.'<td>'. $p-> fecha_nac.'</td>'.'<td>'. $p-> nivel.'</td>'.'<td>'. $p-> grado.'</td>'.'<td>'. $p-> colegio.'</td>'.'<td>'; ?><input type="button" class="btn btn-dark" onclick="location.href='editar.php?id= <?php echo $p->id; ?>';" value="Editar"></td><td><input type="button" class="btn btn-dark" onclick="location.href='eliminar.php?id= <?php echo $p->id; ?>';" value="Eliminar"></td></tr>
          <?php  
          }
          ?>
      </table>
      </div>
  </body>
</html>